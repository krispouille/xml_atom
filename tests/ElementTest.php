<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class ElementTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Element('feed');
    }
    protected function tearDown()
    {
        $this->fixture=null;
    }
    public function testToXml()
    {
        $this->fixture->documentElement->setAttribute('xmlns','http://www.w3.org/2005/Atom');
        $this->fixture->documentElement->setAttribute('xmlns:xhtml','http://www.w3.org/1999/xhtml');
        
        $title = new Atom_Element('title');
        $title->documentElement->appendChild(new DOMText('Example test'));
        $this->fixture->add($title);
        
        $xml = file_get_contents(dirname(__FILE__).'/../fixtures/feed.xml');
        $this->assertEquals($xml, $this->fixture->saveXml());
        
    }
    public function testFromXml()
    {
        $xml = file_get_contents(dirname(__FILE__).'/../fixtures/feed.xml');
        $temp= Atom_Element::fromXml($xml);
        $this->assertEquals($xml, $temp->saveXml());
    }
    
   public function testFromXmlFile()
    {
        $xml = file_get_contents(dirname(__FILE__).'/../fixtures/feed.xml');
        $temp= Atom_Element::fromXmlFile(dirname(__FILE__).'/../fixtures/feed.xml');
        $this->assertEquals($xml, $temp->saveXml());
    }
    
    public function testFromXmlFile2()
    {
        $xml = file_get_contents(dirname(__FILE__).'/../fixtures/infos-du-net.xml');
        $dom=DOMDocument::loadXML($xml,LIBXML_NOBLANKS);
        $temp= Atom_Element::fromXmlFile(dirname(__FILE__).'/../fixtures/infos-du-net.xml');
        $this->assertEquals($dom->saveXml(), $temp->saveXml());
    }
    //TODO comments : comments are not parsed
    /*public function testFromXmlFile3()
    {
        $xml = file_get_contents('http://www.validome.org/check/RSS_validator/version/atom_1_0/action/xml/feed/4');
        $dom=DOMDocument::loadXML($xml,LIBXML_NOBLANKS);
        $temp= Atom_Element::fromXmlFile('http://www.validome.org/check/RSS_validator/version/atom_1_0/action/xml/feed/4');
        $this->assertEquals($dom->saveXml(), $temp->saveXml());
    }*/
}
?>