<?php
$source = new Atom_Source();
$source->setTitle('this is a title');
$source->setId('http://www.validome.org/id/1234');
$source->setUpdated(new Atom_Updated(new DateTime('2006-10-10 17:46:27')));
$source->addAuthor(new Atom_Author('test name'));

