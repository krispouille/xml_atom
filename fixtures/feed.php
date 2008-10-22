<?php
$feed = new Atom_Feed();
$feed->setTitle(new Atom_Title('Example Feed'));
$feed->setUpdated(new Atom_Updated(new DateTime('2003-12-13 18:30:02')));
$feed->addAuthor(new Atom_Author('John Doe'));
$feed->setId(new Atom_Id(urn:uuid:60a76c80-d399-11d9-b93C-0003939e0af6));
 
$entry = new Atom_Entry();
$entry->setTitle(new Atom_Title('Atom draft-07 snapshot'));
$entry->addLink(new Atom_Link('',array('rel'=>'alternate','type'=>'text/html', 'href'=>'http://example.org/2005/04/02/atom')));
$entry->addLink(new Atom_Link('',array('rel'=>'enclosure','type'=>'audio/mpeg', 'length'=>'1337', 'href'=>'http://example.org/audio/ph34r_my_podcast.mp3')));
$entry->setId(new Atom_Id('tag:example.org,2003:3.2397'));
$entry->setUpdated(new Atom_Updated(new DateTime('2005-07-31 12:29:29')));
$entry->setPublished(new Atom_Published(new DateTime('2003-12-13 08:29:29 -04:00')));
$entry->addAuthor(new Atom_Author('Mark Pilgrim','f8dy@example.org','http://example.org'));
$entry->addContributor(new Atom_Contributor('Sam Ruby'));
$entry->addContributor(new Atom_Contributor('Joe Gregorio'));
$entry->setContent('<p><i>[Update: The Atom draft is finished.]</i></p>');
 
$feed->setEntry($entry);

