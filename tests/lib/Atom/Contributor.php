<?php
require_once dirname(__FILE__).'/Element.php';
class Atom_Contributor extends Atom_Person
{
    public function __construct($name='', $email='', $uri='', Array $attributes=array())
    {
        parent::__construct('contributor', $name, $email, $uri, $attributes);
    }
}
