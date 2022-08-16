<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ws_scss".
 *
 * Auto generated 10-08-2022 13:46
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'SASS compiler for TYPO3',
  'description' => 'Compiles scss files to CSS files.',
  'category' => 'fe',
  'version' => '1.2.1',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Sven Wappler',
  'author_email' => 'typo3YYYY@wappler.systems',
  'author_company' => 'WapplerSystems',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.4.0-8.0.99',
      'typo3' => '11.5.0-11.5.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

