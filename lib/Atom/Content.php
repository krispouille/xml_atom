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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Category.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:content element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.content
 * @example valid atom:content element 
 * <content type="xhtml" xml:lang="en" 
 *     xml:base="http://diveintomark.org/">
 *     <div xmlns="http://www.w3.org/1999/xhtml">
 *       <p><i>[Update: The Atom draft is finished.]</i></p>
 *     </div>
 * </content>
 *
 * @example valid Atom_Content element
 * <code>
 * $content = new Atom_Content('<p><i>[Update: The Atom draft is finished.]</i></p>',array('type'=>'xhtml', 'xml:lang'=>'en', 'xml:base'=>'http://diveintomark.org/');
 * </code> 
 */

class Atom_Content extends Atom_Text
{
    /**
     * constructor
     * set up an Atom_Content instance
     *
     * @param mixed $text : string recommanded
     * @param array $attributes
     * @param boolean $cdata : set to 1 if you want to add a cdata section to avoid your characters to be escaped
     * @access public
     */
    public function __construct($text='', Array $attributes=array(), $cdata=0)
    {
        parent::__construct('content', $text, $attributes, $cdata);
    }
}
