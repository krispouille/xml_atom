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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Icon.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:icon element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.icon
 * @example valid atom:icon element
 * <icon>http://www.validome.org/icon.gif</icon>
 *
 * @example valid Atom_Icon element
 * <code>
 * $icon = new Atom_Icon('http://www.validome.org/icon.gif');
 * </code> 
 */

class Atom_Icon extends Atom_Text
{
    /**
     * constructor
     * set up an Atom_Icon instance
     *
     * @param mixed $text : string recommanded
     * @param array $attributes : "term" attribute is required
     * @param boolean $cdata : set to 1 if you want to add a cdata section to avoid your characters to be escaped
     * @access public
     */
    public function __construct($text='', Array $attributes=array(), $cdata=0)
    {
        parent::__construct('icon', $text, $attributes, $cdata);
    }
}
