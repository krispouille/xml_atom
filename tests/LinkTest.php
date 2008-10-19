<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class LinkTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Link('',array('ref'=>'self','href'=>'http://www.validome.org/check/RSS_validator/version/atom_1_0/action/xml/feed/400'));
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
}
?>