<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * @author Chrislain Jemba <krispouille@gmail.com>
 * @license LGPL
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.published
 * provide methods to handle atom:published element
 *
 */
class Atom_Published extends Atom_Date
{
    /**
     * constructor
     * set up an Atom_Published instance
     *
     * @param DateTime $date
     * @param array $attributes
     * @param unknown_type $cdata
     * @access public
     */
    public function __construct(DateTime $date=null, Array $attributes=array(), $cdata=0)
    {
        parent::__construct('published', $date, $attributes, $cdata);
    }
}
