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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Date.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle atom:published and atom:updated elements
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#date.constructs
 */

class Atom_Date extends Atom_Element
{
    /**
     * constructor
     * set up an Atom_Date instance
     *
     * @param string $tagName
     * @param DateTime $date
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct($tagName='', DateTime $date=null, Array $attributes=array(), $cdata=0)
    {
        parent::__construct($tagName);
        $this->setAttributes($attributes);
        if($date!=null && $date!='')
        {
            if(!$cdata)
            {
                $temp=$this->createTextNode($date->format(DateTime::ATOM));
                $this->documentElement->appendChild($temp);
            }
            else
            {
                $temp=$this->createCDATASection($date->format(DateTime::ATOM));
                $this->documentElement->appendChild($temp);
            }
        }
    }
}
