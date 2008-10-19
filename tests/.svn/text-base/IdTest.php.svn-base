<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class IdTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Id('urn:uuid:60a76c80-d399-11d9-b93C-5798hnt64');
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