<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class ContentTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Content('',array('src'=>'http://www.validome.org/content','type'=>'text/html'));
    }
    protected function tearDown()
    {
        $this->fixture=null;
    }
    public function testPrint()
    {
        $xml=$this->fixture->saveXml();
        $temp=Atom_Element::fromXml($xml);
        $this->assertEquals($xml, $temp->saveXML());
    }
    public function testPrintWithNamespaces()
    {
        $xml = file_get_contents(dirname(__FILE__).'/../fixtures/content.xml');
        $temp=Atom_Element::fromXmlFile(dirname(__FILE__).'/../fixtures/content.xml');
        $this->assertEquals($xml, $temp->saveXML());
    }
}
?>