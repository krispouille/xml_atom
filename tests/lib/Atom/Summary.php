<?php
require_once dirname(__FILE__).'/Element.php';
class Atom_Summary extends Atom_Text
{
    public function __construct($text='',Array $attributes=array(),$cdata=0)
    {
        parent::__construct('summary', $text, $attributes, $cdata);
    }
}
