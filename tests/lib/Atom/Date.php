<?php
require_once dirname(__FILE__).'/Element.php';
class Atom_Date extends Atom_Element
{
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
