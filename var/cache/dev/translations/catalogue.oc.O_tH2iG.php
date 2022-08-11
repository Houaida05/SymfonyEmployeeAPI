<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('oc', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Precedent',
    'Next' => 'Seguent',
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
