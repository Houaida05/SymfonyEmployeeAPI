<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Anterior',
    'Next' => 'Următor',
  ),
  'KnpPaginatorBundle' => 
  array (
    'Previous' => 'Pagina anterioara',
    'Next' => 'Pagina urmatoare',
    'filter_searchword' => 'Căutare...',
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
