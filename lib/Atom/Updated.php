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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Updated.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */

require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:updated element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.updated
 * @example ../../fixtures/updated.xml atom:updated (xml version)
 * @example ../../fixtures/updated.php atom:updated (php version)
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
