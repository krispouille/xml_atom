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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Contributor.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:author element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.contributor
 * @example a valid atom:contributor element 
 * <contributor>
 *  <name>Jemba</name>
 *  <email>krispouille@gmail.com</email>
 *  <uri>http://my-uri.com</uri>
 * </contributor>
 * 
 * @example a valid Atom_Contributor element
 * <code>
 * $contributor = new Atom_Contributor('Jemba','krispouille@gmail.com','http://my-uri.com');
 * </code> 
 */

class Atom_Contributor extends Atom_Person
{
    /**
     * constructor
     * set up an Atom_Contributor instance
     *
     * @param string $name
     * @param string $email
     * @param string $uri
     * @param array $attributes
     * @access public
     */
    public function __construct($name='', $email='', $uri='', Array $attributes=array())
    {
        parent::__construct('contributor', $name, $email, $uri, $attributes);
    }
}
