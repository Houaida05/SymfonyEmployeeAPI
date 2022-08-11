<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt_BR', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Próximo',
    'filter_searchword' => 'Procurar...',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
  'pagerfanta' => 
  array (
    'Previous' => 'Anterior',
    'Next' => 'Próxima',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt);
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
$cataloguePt->addFallbackCatalogue($catalogueEn);

return $catalogue;
