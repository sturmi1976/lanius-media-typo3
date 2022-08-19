<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "staticfilecache".
 *
 * Auto generated 19-08-2022 07:53
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'StaticFileCache',
  'description' => 'Transparent static file cache solution using mod_rewrite and mod_expires. Increase performance for static pages by a factor of 230!!',
  'category' => 'fe',
  'version' => '12.4.5',
  'state' => 'stable',
  'uploadfolder' => true,
  'clearcacheonload' => false,
  'author' => 'StaticFileCache Team',
  'author_email' => 'tim@fruit-lab.de',
  'author_company' => 'StaticFileCache Team',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.21-11.5.99',
      'php' => '7.4.0-8.0.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

