<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class AuthorTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Author('Jemba','chrislain@letsbuyit.com','http://www.myuri.com');
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
