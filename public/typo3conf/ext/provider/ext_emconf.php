<?php

/**
 * Extension Manager/Repository config file for ext "provider".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Provider',
    'description' => 'Site-Package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'AlWebdesign\\Provider\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Andre Lanius',
    'author_email' => 'a-lanius@web.de',
    'author_company' => 'AL Webdesign',
    'version' => '1.0.0',
];
