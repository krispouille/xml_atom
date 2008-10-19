<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * @author Chrislain Jemba <krispouille@gmail.com>
 * @license LGPL
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#date.constructs
 * provide methods to handle atom:author element
 *
 */
class Atom_Date extends Atom_Element
{
    /**
     * constructor
     * set up an Atom_Date instance
     *
     * @param string $tagName
     * @param DateTime $date
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct($tagName='', DateTime $date=null, Array $attributes=array(), $cdata=0)
    {
        parent::__construct($tagName);
        $this->setAttributes($attributes);
        if($date!=null && $date!='')
        {
            if(!$cdata)
            {
                $temp=$this->createTextNode($date->format(DateTime::ATOM));
                $this->documentElement->appendChild($temp);
            }
            else
            {
                $temp=$this->createCDATASection($date->format(DateTime::ATOM));
                $this->documentElement->appendChild($temp);
            }
        }
    }
}
