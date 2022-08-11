<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Takaisin',
    'Next' => 'Seuraava',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Edellinen',
    'label_next' => 'Seuraava',
    'filter_searchword' => 'Etsi...',
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
