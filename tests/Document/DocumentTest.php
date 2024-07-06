<?php

namespace Document;

use App\Document\Document;
use App\Document\Export\PDFExport;
use PHPUnit\Framework\TestCase;

class DocumentTest extends TestCase
{
    public function testDocument()
    {
        $document = new Document('Content');

        $this->assertEquals('Content', $document->getContent());
        $this->assertEquals(
            'PDF::' . $document->getContent(),
            $document->export(new PDFExport())
        );
    }

    public function testSetDocument()
    {
        $document = new Document('Content');
        $this->assertEquals('Content', $document->getContent());

        $document->setContent('Content change');
        $this->assertEquals('Content change', $document->getContent());

        $this->assertEquals(
            'PDF::' . $document->getContent(),
            $document->export(new PDFExport())
        );
    }
}
