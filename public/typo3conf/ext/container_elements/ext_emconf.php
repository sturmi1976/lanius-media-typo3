<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "container_elements".
 *
 * Auto generated 15-08-2022 08:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Container elements',
  'description' => 'Provides content elements powered by container and bootstrap. Available elements: container, columns, tabs, accordion, tile unit and card.',
  'category' => 'misc',
  'version' => '3.1.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author' => 'Roman Büchler',
  'author_email' => 'rb@buechler.pro',
  'author_company' => NULL,
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.3.0-8.0.99',
      'typo3' => '10.4.11-11.5.99',
      'container' => '1.3.1-1.99.99',
      'pvh' => '1.0.0-1.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

