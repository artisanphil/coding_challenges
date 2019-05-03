<?php
require_once "readxml.php";

class ReadXMLTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->example = new ReadXML;
    }

    public function testGetIds()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
        <log>
            <entry id="1">
                <message>Application started</message>
            </entry>
            <entry id="2">
                <message>Application ended</message>
            </entry>
        </log>';

        $array = $this->example->getIdsByMessage($xml, 'Application ended');
        $this->assertEquals(2, $array[0]);
    }
}
