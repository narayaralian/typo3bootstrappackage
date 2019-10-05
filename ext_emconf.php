<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bootstrap_package".
 *
 * Auto generated 19-03-2016 21:53
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Bootstrap Package',
  'description' => 'Bootstrap Package delivers a full configured frontend theme for TYPO3, based on the Bootstrap CSS Framework.',
  'category' => 'templates',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.14-7.99.99',
      'fluid_styled_content' => '8.7.27 - 8.9.9',
    ),
    'conflicts' => 
    array (
      'themes' => '*',
      'fluidpages' => '*',
      'dyncss' => '*',
    ),
    'suggests' => 
    array (
    ),
  ),
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author' => 'Benjamin Kott',
  'author_email' => 'info@bk2k.info',
  'author_company' => 'private',
  'version' => '6.2.15',
  'clearcacheonload' => true,
);

