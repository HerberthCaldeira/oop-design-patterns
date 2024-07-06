<?php

namespace App\Document\Export;

use App\Document\Document;
use App\Document\interfaces\IExportable;

class PDFExport implements IExportable
{
    public function export(Document $document): string
    {
        return 'PDF::' . $document->getContent();
    }

}