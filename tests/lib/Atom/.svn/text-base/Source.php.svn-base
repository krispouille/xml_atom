<?php
require_once dirname(__FILE__).'/Element.php';
class Atom_Source extends Atom_Element
{
    public function __construct(Array $attributes=array(),$cdata=0)
    {
        parent::__construct('source');
        $this->setAttributes($attributes);
    }
    
    public function getGenerator($tagName='generator')
    {
        return $this->get($tagName);
    }
    public function getIcon($tagName='icon')
    {
        return $this->get($tagName);
    }
    public function getId($tagName='id')
    {
        return $this->get($tagName);
    }
    public function getLogo($tagName='logo')
    {
        return $this->get($tagName);
    }
    public function getRights($tagName='rights')
    {
        return $this->get($tagName);
    }
    public function getSubtitle($tagName='subtitle')
    {
        return $this->get($tagName);
    }
    public function getTitle($tagName='title')
    {
        return $this->get($tagName);
    }
    public function getUpdated($tagName='updated')
    {
        return $this->get($tagName);
    }
    public function getLinks($tagName='link')
    {
        return $this->getElements($tagName);
    }
    public function getAuthors($tagName='author')
    {
        return $this->getElements($tagName);
    }
    public function getContributors($tagName='contributor')
    {
        return $this->getElements($tagName);
    }
    public function getCategories($tagName='category')
    {
        return $this->getElements($tagName);
    }
    public function addLink(Atom_Link $element)
    {
        $this->add($element);
    }
    public function addAuthor(Atom_Author $element)
    {
        $this->add($element);
    }
    public function addContributor(Atom_Contributor $element)
    {
        $this->add($element);
    }
    public function addCategory(Atom_Category $element)
    {
        $this->add($element);
    }
    public function setGenerator(Atom_Generator $element)
    {
        $this->set('generator', $element->documentElement);
    }
    public function setIcon(Atom_Icon $element)
    {
        $this->set('icon', $element->documentElement);
    }
    public function setId(Atom_Id $element)
    {
        $this->set('id', $element->documentElement);
    }
    public function setLogo(Atom_Logo $element)
    {
        $this->set('logo', $element->documentElement);
    }
    public function setRights(Atom_Rights $element)
    {
        $this->set('rights', $element->documentElement);
    }
    public function setSubtitle(Atom_Subtitle $element)
    {
        $this->set('subtitle', $element->documentElement);
    }
    public function setTitle(Atom_Title $element)
    {
        $this->set('title', $element->documentElement);
    }
    public function setUpdated(Atom_Updated $element)
    {
        $this->set('updated', $element->documentElement);
    }
}
