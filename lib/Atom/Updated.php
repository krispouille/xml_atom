<?php
/**
 * @package Atom
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * @author Chrislain Jemba <krispouille@gmail.com>
 * @license   http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.updated
 * provide methods to handle atom:updated element
 *
 */
class Atom_Updated extends Atom_Date
{
    /**
     * constructor
     * set up an Atom_Updated instance
     *
     * @param DateTime $date
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct(DateTime $date=null, Array $attributes=array(), $cdata=0)
    {
        parent::__construct('updated', $date, $attributes, $cdata);
    }
}
