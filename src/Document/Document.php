<?php

namespace App\Document;

use App\Document\interfaces\IExportable;

class Document
{
    public function __construct(private string $content)
    {}

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function export(IExportable $export): string
    {
        return $export->export($this);
    }

}