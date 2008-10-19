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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Text.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle atom:rights, atom:title, atom:subtitle, atom:icon, atom:id and atom:summary elements
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#text.constructs
 */

class Atom_Text extends Atom_Element
{
    /**
     * constructor
     * set up an Atom_Text instance
     *
     * @param string $tagName
     * @param string $text
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct($tagName='', $text='', Array $attributes=array(), $cdata=0)
    {
        parent::__construct($tagName);
        $this->setAttributes($attributes);
        if(array_key_exists('type',$attributes))
        {
            $type=$attributes['type'];
            /*if($type!='text' && $type!='html' && $type!='xhtml')
            {
                throw new Atom_Exception('Invalid type');
            }*/
            if($text!=null && $text!='')
            {
                if($type=='text' || $type=='html')
                {
                    if(!$cdata)
                    {
                        $temp=$this->createTextNode($text);;
                        $this->documentElement->appendChild($temp);
                    }
                    else
                    {
                        $temp=$this->createCDATASection($text);
                        $this->documentElement->appendChild($temp);
                    }
                }
                if($type=='xhtml')
                {
                    $div=$this->createElement('div');
                    $this->documentElement->appendChild($div);
                    $div->setAttribute('xmlns','http://www.w3.org/1999/xhtml');

                    if(!$cdata)
                    {
                        $temp=$this->createTextNode($text);;
                        $div->appendChild($temp);
                    }
                    else
                    {
                        $temp=$this->createCDATASection($text);
                        $div->appendChild($temp);
                    }
                }
            }
        }
        elseif($text!=null && $text!='')
        {
            if(!$cdata)
            {
                $temp=$this->createTextNode($text);;
                $this->documentElement->appendChild($temp);
            }
            else
            {
                $temp=$this->createCDATASection($text);
                $this->documentElement->appendChild($temp);
            }
        }
    }
}
