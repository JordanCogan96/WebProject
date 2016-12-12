<?php

// Load the XML source
$xml->load('G4S.xml');

$xml = new SimpleXMLElement($xmlString);
echo $xml->GAME->NAME['Id'];
echo $xml->bbb->cccc->eeee['name'];
