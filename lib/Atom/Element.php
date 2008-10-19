<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 2.1 of the GNU Lesser General Public License
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html.
 *
 * @package    Atom
 * @author     Chrislain Jemba <krispouille@gmail.com>
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Element.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Exception.php';
require_once dirname(__FILE__).'/Text.php';
require_once dirname(__FILE__).'/Date.php';
require_once dirname(__FILE__).'/Person.php';
require_once dirname(__FILE__).'/Feed.php';
require_once dirname(__FILE__).'/Source.php';
require_once dirname(__FILE__).'/Content.php';
require_once dirname(__FILE__).'/Entry.php';
require_once dirname(__FILE__).'/Author.php';
require_once dirname(__FILE__).'/Contributor.php';
require_once dirname(__FILE__).'/Person.php';
require_once dirname(__FILE__).'/Category.php';
require_once dirname(__FILE__).'/Generator.php';
require_once dirname(__FILE__).'/Icon.php';
require_once dirname(__FILE__).'/Id.php';
require_once dirname(__FILE__).'/Link.php';
require_once dirname(__FILE__).'/Logo.php';
require_once dirname(__FILE__).'/Published.php';
require_once dirname(__FILE__).'/Rights.php';
require_once dirname(__FILE__).'/Subtitle.php';
require_once dirname(__FILE__).'/Summary.php';
require_once dirname(__FILE__).'/Title.php';
require_once dirname(__FILE__).'/Updated.php';
/**
 * 
 * this class extends a DOMDcoument by proposing in addition, methods to handle atom elements 
 * thus, an Atom_Feed extends an Atom_Element which also extends a DOMDocument 
 * i choose DOMDocument (instead of DOMElement), because it's the only way to handle at the same time nodes, and their display  
 * 
 */
class Atom_Element extends DOMDocument
{
    /**
     * constructor
     * set up an Atom_Element instance
     *
     * @param string $tagName
     * @example 
     * $feed = new Atom_Element('feed') 
     * is similar to
     * $feed = new DOMDocument;
     * $feed->appendChild(new DOMElement('feed'))
     * @access public 
     */
    public function __construct($tagName='')
    {
        parent::__construct();
        if($tagName!='' && $tagName!=null)
        {
            $this->appendChild(new DOMElement($tagName));
        }
    }
    /**
     * add an element to a Atom_Element/DOMDocument 
     *
     * @param DOMDocument $dom
     * @example 
     * $feed->add(new Atom_Element('title'));
     * @access public
     */
    public function add(DOMDocument $dom)
    {
        $this->addElement($dom->documentElement);
    }
    /**
     * append a DOMElement node in the DOMDocument
     * after the root node if it exists, or by creating it
     *
     * @param DOMElement $element
     * @access protected
     */
    protected function addElement(DOMElement $element)
    {
        if(!$element)
        {
            throw new Atom_Exception('Invalid DOMElement');
        }
        $node=$this->importNode($element,true);
        if(!$this->documentElement)
        {
            $this->appendChild($node);
        }
        else
        {
            $this->documentElement->appendChild($node);
        }
    }
    /**
     * return a DOMDocument instance from an xml string
     *
     * @param string $xml
     * @return DOMDocument
     * @access protected
     */
    protected static function getDomFromXml($xml)
    {
        if(!isset($xml))
        {
            throw new Atom_Exception('Invalid xml');
        }
        libxml_use_internal_errors(true);
        $document = DOMDocument::loadXML($xml, LIBXML_NOBLANKS);
        if (!$document) {
            $errors = libxml_get_errors();
            $msg='';
            foreach ($errors as $error) {
                $msg.=$error->message." | ";
            }
            libxml_clear_errors();
            throw new Atom_Exception($msg);
        }
        return $document;
    }
    /**
     * return a DOMDocument instance from an xml file
     *
     * @param string $path
     * @return DOMDocument
     * @access protected
     */
    protected static function getDomFromXmlFile($path=null)
    {
        if(!isset($path))
        {
            throw new Atom_Exception('Invalid path');
        }
        libxml_use_internal_errors(true);
        $document = DOMDocument::load($path, LIBXML_NOBLANKS);
        if (!$document) {
            $errors = libxml_get_errors();
            $msg='';
            foreach ($errors as $error) {
                $msg.=$error->message." | ";
            }
            libxml_clear_errors();
            throw new Atom_Exception($msg);
        }
        return $document;
    }
    
    /**
     * set up a instance by replacing the root element
     * by a given DOMElement
     *
     * @param DOMElement $element
     * @access protected
     */
    protected function init(DOMElement $element=null)
    {
        if($this->documentElement!=null)
        {
            $this->removeChild($this->documentElement);
        }
        $this->addElement($element);
    }
    /**
     * return an Atom_Element or null from a tag name
     *
     * @param string $tagName
     * @return Atom_Element
     * @access protected
     */
    protected function getElement($tagName='')
    {
        if($this->documentElement->getElementsByTagName($tagName)->length)
        {
            return Atom_Element::fromDOMElement($this->documentElement->getElementsByTagName($tagName)->item(0));
        }
        else
        {
            return null;
        }
    }
    /**
     * return an array of Atom_Element from a tag name
     * TODO optimiser
     *
     * @param string $tagName
     * @return Array
     * @access protected
     */
    protected function getElements($tagName='')
    {
        $temp=$this->documentElement->getElementsByTagName($tagName);
        
        $items=array();
        foreach($temp as $item)
        {
            $res = Atom_Element::getInstance($this,$tagName);
            $res->init($item);
            $items[]=$res;
        }

        return $items;
    }
    
    /**
     * return an Atom_* instance from an xml if the root tag name is recognized as an atom element
     * otherwise, return an Atom_Element instance
     * all comments nodes are ignored and not parsed
     *
     * @param string $xml
     * @return Atom_Element
     * @example 
     * $obj = Atom_Element::fromXml('<?xml version="1.0" ?><feed></feed>');
     * $obj become an Atom_Feed instance
     * @access public
     */
    public static function fromXml($xml)
    {
        if(!isset($xml))
        {
            throw new Atom_Exception('Invalid xml');
        }
        $dom = self::getDomFromXml($xml);
        
        $element=Atom_Element::getInstance($dom);
        $element->init($dom->documentElement);
        return $element;
    }
    /**
     * return an Atom_* instance from an xml file if the root tag name is recognized as an atom element
     * otherwise, return an Atom_Element instance
     * all comments nodes are ignored and not parsed
     *
     * @param string $path
     * @return Atom_Element
     * @example
     * $obj = Atom_Element::fromXmlFile($path);
     * $obj become an Atom_* instance
     * @access public
     */
    public static function fromXmlFile($path=null)
    {
        if(!isset($path))
        {
            throw new Atom_Exception('Invalid file');
        }
        $dom = self::getDomFromXmlFile($path);
        
        $element=Atom_Element::getInstance($dom);
        $element->init($dom->documentElement);
        return $element;
    }
    /**
     * set a list of attibutes in the Atom_Element
     *
     * @param array $attributes
     * @example 
     * $feed->setAttributes(array('class'=>'var1', 'id'=>'myid'))
     * @access public
     */
    public function setAttributes(Array $attributes=array())
    {
        foreach($attributes as $key=>$value)
        {
            $this->documentElement->setAttribute($key,$value);
        }
    }
    /**
     * parse all the attributes (including namespaces) of a DOMElement
     * @param DOMElement $element element to parse
     * @return Array which regroup pairs [key,value] of attributes founded
     * @deprecated  
     */
    public static function getAllAttributes(DOMElement $element)
    {
        $value = $element->ownerDocument->saveXml($element);
        preg_match('/<.[^<>]*>/', $value, $temp);
        preg_match_all('/\s*([\w:]*)\s*=\s*"([\w:\/\s\."]*)"\s*/x',$temp[0],$occ);
        return (!empty($occ[0]))?array_combine($occ[1],$occ[2]):array();
    }
    /**
     * append a child to a markup by giving the name of the tag name and the element to append
     *
     * @param string $tagName
     * @param DOMElement $element
     * @access protected
     */
    protected function set($tagName, DOMElement $element)
    {
        if(!isset($tagName))
        {
            throw new Atom_Exception('Tag name required');
        }

        $nodelist = $this->getElementsByTagName($tagName);
        $old = $nodelist->item(0);
        
        if($old)
        {
            $new = $this->importNode($element, true);
            $old->parentNode->replaceChild($new, $old);
        }
        else
        {
            $this->addElement($element);
        }
    }
    /**
     * return an Atom_* instance from a tag name and a DOMDocument
     *
     * @param mixed $obj
     * @param string $tagName
     * @return Atom_Element
     * @access protected
     */
    protected static function getInstance($obj, $tagName='')
    {
        if($tagName!='' && $tagName!=null)
        {
            $test=$tagName;
        }
        else
        {
            $test=$obj->documentElement->nodeName;
        }
        if($test=='feed')
        {
            $element = new Atom_Feed;
        }
        else if($test=='entry')
        {
            $element = new Atom_Entry;
        }
        else if($test=='source')
        {
            $element = new Atom_Source;
        }
        else if($test=='content')
        {
            $element = new Atom_Content;
        }
        else if($test=='author')
        {
            $element = new Atom_Author;
        }
        else if($test=='contributor')
        {
            $element = new Atom_Contributor;
        }
        else if($test=='category')
        {
            $element = new Atom_Category;
        }
        else if($test=='generator')
        {
            $element = new Atom_Generator;
        }
        else if($test=='icon')
        {
            $element = new Atom_Icon;
        }
        else if($test=='id')
        {
            $element = new Atom_Id;
        }
        else if($test=='link')
        {
            $element = new Atom_Link;
        }
        else if($test=='logo')
        {
            $element = new Atom_Logo;
        }
        else if($test=='published')
        {
            $element = new Atom_Published;
        }
        else if($test=='rights')
        {
            $element = new Atom_Rights;
        }
        else if($test=='subtitle')
        {
            $element = new Atom_Subtitle;
        }
        else if($test=='title')
        {
            $element = new Atom_Title;
        }
        else if($test=='updated')
        {
            $element = new Atom_Updated;
        }
        else
        {
            $element = new Atom_Element;
        }
        return $element;
    }
    /**
     * return an Atom_* instance depending on the tag name
     *
     * @param string $tagName
     * @return Atom_*
     * @access protected
     */
    protected function get($tagName)
    {
        if($this->documentElement==null)
        {
            return null;
        }
        $element=Atom_Element::getInstance($this, $tagName);
        $element->init($this->documentElement->getElementsByTagName($tagName)->item(0));
        
        return $element;
    }
    /**
     * return the nodeValue of an root element
     *
     * @return string
     * @access public
     */
    public function toString()
    {
        return $this->documentElement->nodeValue;
    }
}
