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
 * @version    Release: @package_version@
 * @author     Chrislain Jemba <krispouille@gmail.com>
 * @link       http://pear.php.net/package/XML_Atom
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008 LETSBUYIT
 * @version    CVS: $Id:$
 */

require_once dirname(__FILE__).'/Element.php';

/**
 * this class provides methods to handle an atom:author
 * 
 * @example a valid atom:author element 
 * <author>
 *  <name>Jemba</name>
 *  <email>krispouille@gmail.com</email>
 *  <uri>http://my-uri.com</uri>
 * </author>
 * 
 * @example a valid Atom_Author element
 * <code>
 * $author = new Atom_Author('Jemba','krispouille@gmail.com','http://my-uri.com');
 * </code> 
 */

class Atom_Author extends Atom_Person
{
    /**
     * constructor
     * set up an Atom_Author instance
     *
     * @param string $name
     * @param string $email
     * @param string $uri
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct($name='', $email='', $uri='', Array $attributes=array(),$cdata=0)
    {
        parent::__construct('author', $name, $email, $uri, $attributes, $cdata);
    }
}
