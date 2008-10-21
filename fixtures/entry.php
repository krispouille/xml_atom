<?php
$entry = new Atom_Entry();
$entry->setTitle(new Atom_Title('Atom-Powered Robots Run Amok'));
$entry->addLink(new Atom_Link('',array('href'=>'http://example.org/2003/12/13/atom03')));
$entry->setId(new Atom_Id('urn:uuid:1225c695-cfb8-4ebb-aaaa-80da344efa6a'));
$entry->setUpdated(new Atom_Updated(new DateTime('2003-12-13 18:30:02')));
$entry->setSummary(new Atom_Summary('Some summary.'));
