<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cs', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Předchozí',
    'Next' => 'Následující',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Předchozí',
    'label_next' => 'Další',
    'filter_searchword' => 'Vyhledávat...',
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
