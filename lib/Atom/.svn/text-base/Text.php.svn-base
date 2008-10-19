<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * @author Chrislain Jemba <krispouille@gmail.com>
 * @license LGPL
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#text.constructs
 * provide methods to handle text constructs
 *
 */
class Atom_Text extends Atom_Element
{
    /**
     * constructor
     * set up an Atom_Text instance
     *
     * @param string $tagName
     * @param string $text
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct($tagName='', $text='', Array $attributes=array(), $cdata=0)
    {
        parent::__construct($tagName);
        $this->setAttributes($attributes);
        if(array_key_exists('type',$attributes))
        {
            $type=$attributes['type'];
            /*if($type!='text' && $type!='html' && $type!='xhtml')
            {
                throw new Atom_Exception('Invalid type');
            }*/
            if($text!=null && $text!='')
            {
                if($type=='text' || $type=='html')
                {
                    if(!$cdata)
                    {
                        $temp=$this->createTextNode($text);;
                        $this->documentElement->appendChild($temp);
                    }
                    else
                    {
                        $temp=$this->createCDATASection($text);
                        $this->documentElement->appendChild($temp);
                    }
                }
                if($type=='xhtml')
                {
                    $div=$this->createElement('div');
                    $this->documentElement->appendChild($div);
                    $div->setAttribute('xmlns','http://www.w3.org/1999/xhtml');

                    if(!$cdata)
                    {
                        $temp=$this->createTextNode($text);;
                        $div->appendChild($temp);
                    }
                    else
                    {
                        $temp=$this->createCDATASection($text);
                        $div->appendChild($temp);
                    }
                }
            }
        }
        elseif($text!=null && $text!='')
        {
            if(!$cdata)
            {
                $temp=$this->createTextNode($text);;
                $this->documentElement->appendChild($temp);
            }
            else
            {
                $temp=$this->createCDATASection($text);
                $this->documentElement->appendChild($temp);
            }
        }
    }
}
