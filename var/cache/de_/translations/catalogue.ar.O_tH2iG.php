<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'pagerfanta' => 
  array (
    'Previous' => 'السابق',
    'Next' => 'التالي',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'السابق',
    'label_next' => 'التالي',
    'filter_searchword' => 'بحث...',
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
