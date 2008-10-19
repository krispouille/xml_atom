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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Title.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:title element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.title
 * @example valid atom:title element
 * <title>http://www.validome.org/small.jpg</title>
 * 
 * @example valid Atom_Title element
 * <code>
 * $title = new Atom_Title('http://www.validome.org/small.jpg');
 * </code> 
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
