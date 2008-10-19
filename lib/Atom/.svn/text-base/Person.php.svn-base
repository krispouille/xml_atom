<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * @author Chrislain Jemba <krispouille@gmail.com>
 * @license LGPL
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#atomPersonConstruct
 * provide methods to handle atom:author element
 *
 */
class Atom_Person extends Atom_Element
{
    /**
     * constructor
     * set up Atom_Person intance
     *
     * @param string $tagName
     * @param string $name
     * @param string $email
     * @param string $uri
     * @param array $attributes
     * @access public
     */
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
    /**
     * set a name
     *
     * @param string $name
     */
    public function setName($name='')
    {
        $this->set('name', new DOMElement('name',$name));
    }
    /**
     * set an email
     *
     * @param string $email
     */
    public function setEmail($email='')
    {
        $this->set('email', new DOMElement('email',$email));
    }
    /**
     * set an uri
     *
     * @param string $uri
     */
    public function setUri($uri='')
    {
       $this->set('uri', new DOMElement('uri',$uri));
    }
    /**
     * return a string representating the display of an atom:person (author or contributor)
     *
     * @return string
     */
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
    /**
     * return the Atom_Element instance representating the name
     *
     * @return Atom_Element
     */
    public function getName()
    {
        return $this->get('name');
    }
    /**
     * return the Atom_Element representating the email
     *
     * @return Atom_Element
     */
    public function getEmail()
    {
       return $this->get('email');
    }
    /**
     * return the Atom_Element representating the uri
     *
     * @return Atom_Element
     */
    public function getUri()
    {
        return $this->get('uri');
    }
}
