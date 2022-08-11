<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'pagerfanta' => 
  array (
    'Previous' => 'قبلی',
    'Next' => 'بعدی',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'قبلی',
    'label_next' => 'بعدی',
    'filter_searchword' => 'کلمه جستجو...',
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
