<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * @author Chrislain Jemba <krispouille@gmail.com>
 * @license LGPL
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.title
 * provide methods to handle atom:title element
 *
 */
class Atom_Title extends Atom_Text
{
    /**
     * constructor
     * set up an Atom_title instance
     *
     * @param string $text
     * @param array $attributes
     * @param boolean $cdata
     */
    public function __construct($text='',Array $attributes=array(),$cdata=0)
    {
        parent::__construct('title', $text, $attributes, $cdata);
    }
}
