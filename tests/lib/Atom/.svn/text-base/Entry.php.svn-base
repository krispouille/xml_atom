<?php
require_once dirname(__FILE__).'/Element.php';
class Atom_Entry extends Atom_Element
{
    public function __construct(Array $attributes=array(),$cdata=0)
    {
        parent::__construct('entry');
        $this->setAttributes($attributes);
    }
    public function getContent($tagName='content')
    {
        return $this->get($tagName);
    }
    public function getId($tagName='id')
    {
        return $this->get($tagName);
    }
    public function getRights($tagName='rights')
    {
        return $this->get($tagName);
    }
    public function getSource($tagName='source')
    {
        return $this->get($tagName);
    }
    public function getSummary($tagName='summary')
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
    public function getPublished($tagName='published')
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
    public function setContent(Atom_Content $element)
    {
        $this->set('content', $element->documentElement);
    }
    
    public function setId(Atom_Id $element)
    {
        $this->set('id', $element->documentElement);
    }
    
    public function setRights(Atom_Rights $element)
    {
        $this->set('rights', $element->documentElement);
    }
    public function setSource(Atom_Source $element)
    {
        $this->set('source', $element->documentElement);
    }
    public function setSummary(Atom_Summary $element)
    {
        $this->set('summary', $element->documentElement);
    }
    public function setTitle(Atom_Title $element)
    {
        $this->set('title', $element->documentElement);
    }
    public function setUpdated(Atom_Updated $element)
    {
        $this->set('updated', $element->documentElement);
    }
    public function setPublished(Atom_Published $element)
    {
        $this->set('published', $element->documentElement);
    }
}
