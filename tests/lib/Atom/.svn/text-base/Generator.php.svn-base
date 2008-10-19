<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * Atom_Generator provides methods to handle an atom:generator element
 * @author Jemba Chrislain <krispouille@gmail.com>
 */
class Atom_Generator extends Atom_Text
{
    /**
     * constructor : set up an Atom_Category instance
     * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.generator
     *
     * @param mixed $text : string recommanded
     * @param array $attributes : "term" attribute is required
     * @param boolean $cdata : set to 1 if you want to add a cdata section to avoid your characters to be escaped
     */
    public function __construct($text='', Array $attributes=array(), $cdata=0)
    {
        parent::__construct('generator', $text, $attributes, $cdata);
    }
}
