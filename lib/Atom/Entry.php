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
 * @link       http://github.com/krispouille/xml_atom/tree/5646c7d463c3667afbb02fb9502fe766648af6e3/lib/Atom/Entry.php
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL 2.1
 * @copyright  2008
 * @version    CVS: $Id:$
 */
require_once dirname(__FILE__).'/Element.php';
/**
 * this class provides methods to handle an atom:entry element
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#element.entry
 * @example ../../fixtures/entry.xml atom:entry (xml version)
 * @example ../../fixtures/entry.php atom:entry (php version)
 */
class Atom_Entry extends Atom_Element
{
    /**
     * constructor
     * set up an Atom_Entry instance
     *
     * @param array $attributes
     * @param boolean $cdata
     * @access public
     */
    public function __construct(Array $attributes=array(),$cdata=0)
    {
        parent::__construct('entry');
        $this->setAttributes($attributes);
    }
    /**
     * return an Atom_Content instance
     *
     * @param string $tagName
     * @return Atom_Content
     * @access public
     */
    public function getContent($tagName='content')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Id instance
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
     * return an Atom_Rights instance
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
     * return an Atom_Source instance
     *
     * @param string $tagName
     * @return Atom_Source
     * @access public
     */
    public function getSource($tagName='source')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Summary instance
     *
     * @param string $tagName
     * @return Atom_Summary
     * @access public
     */
    public function getSummary($tagName='summary')
    {
        return $this->get($tagName);
    }
    /**
     * return an Atom_Title instance
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
     * return an Atom_Updated instance
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
     * return an AtomPublished instance
     *
     * @param string $tagName
     * @return Atom_Published
     * @access public
     */
    public function getPublished($tagName='published')
    {
        return $this->get($tagName);
    }
    /**
     * return an array of Atom_Links instances
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
     * return an array of Atom_Authors instances
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
     * return an array of Atom_Content instances
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
     * return an array of Atom_Content instances
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
     * @param Atom_Link $element
     * @access public
     */
    public function addLink(Atom_Link $element)
    {
        $this->add($element);
    }
    /**
     * add an Atom_Author
     *
     * @param Atom_Author $element
     * @access public
     */
    public function addAuthor(Atom_Author $element)
    {
        $this->add($element);
    }
    /**
     * add an Atom_Contributor
     *
     * @param Atom_Contributor $element
     * @access public
     */
    public function addContributor(Atom_Contributor $element)
    {
        $this->add($element);
    }
    /**
     * add an Atom_Category
     *
     * @param Atom_Category $element
     * @access public
     */
    public function addCategory(Atom_Category $element)
    {
        $this->add($element);
    }
    /**
     * add/replace an Atom_Content
     *
     * @param Atom_Content $element
     * @access public
     */
    public function setContent(Atom_Content $element)
    {
        $this->set('content', $element->documentElement);
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
     * add/replace an Atom_Source
     *
     * @param Atom_Source $element
     * @access public
     */
    public function setSource(Atom_Source $element)
    {
        $this->set('source', $element->documentElement);
    }
    /**
     * add/replace an Atom_Summary
     *
     * @param Atom_Summary $element
     * @access public
     */
    public function setSummary(Atom_Summary $element)
    {
        $this->set('summary', $element->documentElement);
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
    /**
     * add/replace an Atom_Published
     *
     * @param Atom_Published $element
     * @access public
     */
    public function setPublished(Atom_Published $element)
    {
        $this->set('published', $element->documentElement);
    }
}
