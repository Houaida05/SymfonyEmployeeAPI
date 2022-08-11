<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('gl', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Anterior',
    'Next' => 'Seguinte',
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
