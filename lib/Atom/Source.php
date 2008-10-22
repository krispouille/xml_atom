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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Source.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */

require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:source element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.source
 * @example ../../fixtures/source.xml atom:source (xml version) 
 * @example ../../fixtures/source.php atom:source (php version)
 */ 

class Atom_Source extends Atom_Element
{
    /**
     * constructor
     * set up an Atom_Source instance
     *
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct(Array $attributes=array(),$cdata=0)
    {
        parent::__construct('source');
        $this->setAttributes($attributes);
    }
    
    /**
     * return an Atom_Generator
     *
     * @param string $tagName
     * @return Atom_Generator
     * @access public
     */
    public function getGenerator($tagName='generator')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Icon
     *
     * @param string $tagName
     * @return Atom_Icon
     * @access public
     */
    public function getIcon($tagName='icon')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Id
     *
     * @param string $tagName
     * @return Atom_Id
     * @access public
     */
    public function getId($tagName='id')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Logo
     *
     * @param string $tagName
     * @return Atom_Logo
     * @access public
     */
    public function getLogo($tagName='logo')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Rights
     *
     * @param string $tagName
     * @return Atom_Rights
     * @access public
     */
    public function getRights($tagName='rights')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Subtitle
     *
     * @param string $tagName
     * @return Atom_Subtitle
     * @access public
     */
    public function getSubtitle($tagName='subtitle')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Title
     *
     * @param string $tagName
     * @return Atom_Title
     * @access public
     */
    public function getTitle($tagName='title')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Updated
     *
     * @param string $tagName
     * @return Atom_Updated
     * @access public
     */
    public function getUpdated($tagName='updated')
    {
        return $this->get($tagName);
    }
    /**
     * return an array of Atom_Link instances
     *
     * @param string $tagName
     * @return array
     * @access public
     */
    public function getLinks($tagName='link')
    {
        return $this->getElements($tagName);
    }
    /**
     * return an array of Atom_Author instances
     *
     * @param string $tagName
     * @return array
     * @access public
     */
    public function getAuthors($tagName='author')
    {
        return $this->getElements($tagName);
    }
    /**
     * return an array of Atom_Contributor instances
     *
     * @param string $tagName
     * @return array
     * @access public
     */
    public function getContributors($tagName='contributor')
    {
        return $this->getElements($tagName);
    }
    /**
     * return an array of Atom_Category instances
     *
     * @param string $tagName
     * @return array
     * @access public
     */
    public function getCategories($tagName='category')
    {
        return $this->getElements($tagName);
    }
    /**
     * add an Atom_Link
     *
     * @param string $tagName
     * @access public
     */
    public function addLink(Atom_Link $element)
    {
        $this->add($element);
    }
    /**
     * add an Atom_Author
     *
     * @param string $tagName
     * @access public
     */
    public function addAuthor(Atom_Author $element)
    {
        $this->add($element);
    }
    /**
     * add an Atom_Contributor
     *
     * @param string $tagName
     * @access public
     */
    public function addContributor(Atom_Contributor $element)
    {
        $this->add($element);
    }
    /**
     * add an Atom_Category
     *
     * @param string $tagName
     * @access public
     */
    public function addCategory(Atom_Category $element)
    {
        $this->add($element);
    }
    /**
     * add/replace an Atom_Generator
     *
     * @param Atom_Generator $element
     * @access public
     */
    public function setGenerator(Atom_Generator $element)
    {
        $this->set('generator', $element->documentElement);
    }
    /**
     * add/replace an Atom_Icon
     *
     * @param Atom_Icon $element
     * @access public
     */
    public function setIcon(Atom_Icon $element)
    {
        $this->set('icon', $element->documentElement);
    }
    /**
     * add/replace an Atom_Id
     *
     * @param Atom_Id $element
     * @access public
     */
    public function setId(Atom_Id $element)
    {
        $this->set('id', $element->documentElement);
    }
    /**
     * add/replace an Atom_Logo
     *
     * @param Atom_Logo $element
     * @access public
     */
    public function setLogo(Atom_Logo $element)
    {
        $this->set('logo', $element->documentElement);
    }
    /**
     * add/replace an Atom_Rights
     *
     * @param Atom_Rights $element
     * @access public
     */
    public function setRights(Atom_Rights $element)
    {
        $this->set('rights', $element->documentElement);
    }
    /**
     * add/replace an Atom_Subtitle
     *
     * @param Atom_Subtitle $element
     * @access public
     */
    public function setSubtitle(Atom_Subtitle $element)
    {
        $this->set('subtitle', $element->documentElement);
    }
    /**
     * add/replace an Atom_Title
     *
     * @param Atom_Title $element
     * @access public
     */
    public function setTitle(Atom_Title $element)
    {
        $this->set('title', $element->documentElement);
    }
    /**
     * add/replace an Atom_Updated
     *
     * @param Atom_Updated $element
     * @access public
     */
    public function setUpdated(Atom_Updated $element)
    {
        $this->set('updated', $element->documentElement);
    }
}
