<?php
require_once dirname(__FILE__).'/Element.php';
class Atom_Person extends Atom_Element
{
    public function __construct($tagName='', $name='', $email='', $uri='', Array $attributes=array())
    {
        parent::__construct($tagName);
        $this->setAttributes($attributes);
        if($name!='' && $name!=null)
        {
            $this->setName($name);
        }
        if($email!='' && $email!=null)
        {
            $this->setEmail($email);
        }
        if($uri!='' && $uri!=null)
        {
            $this->setUri($uri);
        }
    }
    
    public function setName($name='')
    {
        $this->set('name', new DOMElement('name',$name));
    }
    public function setEmail($email='')
    {
        $this->set('email', new DOMElement('email',$email));
    }
    public function setUri($uri='')
    {
       $this->set('uri', new DOMElement('uri',$uri));
    }
    public function toString()
    {
        $ret = '';
        $name = $this->documentElement->getElementsByTagName('name')->item(0)->nodeValue;
        $email = $this->documentElement->getElementsByTagName('email')->item(0)->nodeValue;
        $uri = $this->documentElement->getElementsByTagName('uri')->item(0)->nodeValue;
        
        if($name)
        {
            $ret .= $name;
        }
        if($email)
        {
            $ret .="<$email>";
        }
        if($uri)
        {
            $ret .=' '.$uri;
        }
        return $ret;
        
    }
    public function getName()
    {
        return $this->get('name');
    }
    public function getEmail()
    {
       return $this->get('email');
    }
    public function getUri()
    {
        return $this->get('uri');
    }
}
