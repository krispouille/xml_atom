<?php
require_once dirname(__FILE__).'/../lib/Atom/Element.php';

class EntryTest extends PHPUnit_Framework_TestCase
{
    protected $fixture;
    protected function setUp()
    {
        $this->fixture=new Atom_Entry();
    }
    protected function tearDown()
    {
        $this->fixture=null;
    }
    public function testPrint()
    {
        $this->fixture->add(new Atom_Title('Example feed'));
        $this->fixture->add(new Atom_Author('Jemba','chrislain@letsbuyit.com'));
        $this->fixture->add(new Atom_Contributor('Rivoallan','tristan@letsbuyit.com'));
        $this->fixture->add(new Atom_Category('CPU',array('term'=>'technology')));
        $this->fixture->add(new Atom_Updated(new DateTime()));
        $this->fixture->add(new Atom_Id('urn:uuid:60a76c80-d399-11d9-b93C-5798hnt64'));
        $this->fixture->add(new Atom_Link('',array('rel'=>'self', 'href'=>'http://www.validome.org/check/RSS_validator/version/atom_1_0/action/xml/feed/400')));
        $this->fixture->add(new Atom_Rights('content',array('type'=>'text')));
        
        $xml=$this->fixture->saveXml();
        
        $temp=Atom_Element::fromXml($xml);
        $this->assertEquals($xml, $temp->saveXML());
    }
    
    public function testGetAuthors()
    {
        $this->fixture->add(new Atom_Author('Jemba','chrislain@letsbuyit.com'));
        $this->fixture->add(new Atom_Author('Tristan','tristan@letsbuyit.com'));
        
        $temp=$this->fixture->getAuthors();
        $this->assertEquals('Jemba<chrislain@letsbuyit.com>',$temp[0]->toString());
        $this->assertEquals('Tristan<tristan@letsbuyit.com>',$temp[1]->toString());
    }
    public function testGetContributors()
    {
        $this->fixture->add(new Atom_Contributor('Jemba','chrislain@letsbuyit.com'));
        $this->fixture->add(new Atom_Contributor('Tristan','tristan@letsbuyit.com'));
        
        $temp=$this->fixture->getContributors();
        $this->assertEquals('Jemba<chrislain@letsbuyit.com>',$temp[0]->toString());
        $this->assertEquals('Tristan<tristan@letsbuyit.com>',$temp[1]->toString());
    }
}
?>