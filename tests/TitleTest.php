<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class TitleTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Title('Example title',array('type'=>'text'));
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