<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('it', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Precedente',
    'Next' => 'Successivo',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Precedente',
    'label_next' => 'Successivo',
    'filter_searchword' => 'Ricerca...',
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
