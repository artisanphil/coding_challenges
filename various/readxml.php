<?php
class ReadXML
{
    public function getIdsByMessage(string $xml, string $message) : array
    {
        $doc = new DomDocument();
        $doc->preserveWhiteSpace = false;
        $doc->loadXML($xml);

        $dom_xpath = new DOMXPath($doc);
        $entries = $dom_xpath->query('//log/entry/message');

        $array = [];
        foreach ($entries as $entry) {
            if ($entry->nodeValue == $message) {
                $id = $entry->parentNode->getAttribute("id");
                array_push($array, $id);
            }
        }
        return $array;
    }
}
