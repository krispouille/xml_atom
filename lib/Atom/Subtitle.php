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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Subtitle.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:subtitle element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.subtitle
 * @example valid atom:subtitle element
 * <subtitle>http://www.validome.org/small.jpg</subtitle>
 * 
 * @example valid Atom_Subtitle element
 * <code>
 * $subtitle = new Atom_Subtitle('http://www.validome.org/small.jpg');
 * </code> 
 */

class Atom_Subtitle extends Atom_Text
{
    /**
     * constructor
     * set up an Atom_Subtitle
     *
     * @param string $text
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct($text='',Array $attributes=array(),$cdata=0)
    {
        parent::__construct('subtitle', $text, $attributes, $cdata);
    }
}
