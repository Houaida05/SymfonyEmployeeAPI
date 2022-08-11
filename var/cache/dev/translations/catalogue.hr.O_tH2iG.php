<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hr', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Prethodna',
    'Next' => 'Sljedeća',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Prethodna',
    'label_next' => 'Sljedeća',
    'filter_searchword' => 'Tražena riječ...',
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
