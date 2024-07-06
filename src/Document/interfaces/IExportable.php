<?php

namespace App\Document\interfaces;

use App\Document\Document;

interface IExportable
{
    public function export(Document $document): string;

}