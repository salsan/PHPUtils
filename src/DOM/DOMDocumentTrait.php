<?php

declare(strict_types=1);

namespace Salsan\Utils\DOM;

use DOMDocument;

trait DOMDocumentTrait
{
    public function getHTML(string $url, ?string $charset)
    {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        $html = file_get_contents($url);
        $dom->loadHTML(($charset) ? '<!DOCTYPE html><meta charset="' . $charset . '">' . $html  : $html); // workaround for issue #2 https://stackoverflow.com/a/8218649/1501286

        return $dom;
    }
}
