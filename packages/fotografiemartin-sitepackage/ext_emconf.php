<?php

/**
 * Extension Manager/Repository config file for ext "fotografiemartin_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'fotografiemartin-sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'OmniCollapze\\FotografiemartinSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'OMNI Primus',
    'author_email' => 'primus@omni-collapze.de',
    'author_company' => 'OMNI CollapZe',
    'version' => '1.0.0',
];
