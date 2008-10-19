<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class PersonTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Person('author','Jemba','chrislain@letsbuyit.com','http://www.myuri.com');
    }
    protected function tearDown()
    {
        $this->fixture=null;
    }
    public function testGetName()
    {
       $this->assertEquals('Jemba',$this->fixture->getName()->toString());
    }
    public function testGetEmail()
    {
       $this->assertEquals('chrislain@letsbuyit.com',$this->fixture->getEmail()->toString());
    }
    public function testGetUri()
    {
       $this->assertEquals('http://www.myuri.com',$this->fixture->getUri()->toString());
    }
    public function testSetName()
    {
        $this->fixture->setName('Tristan');
        $this->assertEquals('Tristan',$this->fixture->getName()->toString());
    }
    public function testSetEmail()
    {
        $this->fixture->setEmail('tristan@letsbuyit.com');
        $this->assertEquals('tristan@letsbuyit.com',$this->fixture->getEmail()->toString());
    }
    public function testSetUri()
    {
        $this->fixture->setUri('http://www.tristanuri.com');
        $this->assertEquals('http://www.tristanuri.com',$this->fixture->getUri()->toString());
    }
}
?>