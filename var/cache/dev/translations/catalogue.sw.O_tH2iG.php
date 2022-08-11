<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sw', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Nyuma',
    'Next' => 'Mbele',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Kabla',
    'label_next' => 'Ijayo',
    'filter_searchword' => 'Utaftaji...',
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
