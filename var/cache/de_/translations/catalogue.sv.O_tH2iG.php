<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sv', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Tillbaka',
    'Next' => 'Nästa',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Föregående',
    'label_next' => 'Nästa',
    'filter_searchword' => 'Sök...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Previous',
    'Next' => 'Next',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
