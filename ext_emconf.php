<?php

//#######################################################################
// Extension Manager/Repository config file for ext "Themes".
//
// Manual updates:
// Only the data in the array - everything else is removed by next
// writing. "version" and "dependencies" must not be touched!
//#######################################################################

$EM_CONF[$_EXTKEY] = [
    'title'              => 'THEMES - The theme engine',
    'description'        => '',
    'category'           => 'fe',
    'shy'                => 0,
    'version'            => '7.0.3',
    'dependencies'       => '',
    'conflicts'          => '',
    'priority'           => '',
    'loadOrder'          => '',
    'module'             => '',
    'state'              => 'stable',
    'uploadfolder'       => 0,
    'createDirs'         => '',
    'modify_tables'      => '',
    'clearcacheonload'   => 0,
    'lockType'           => '',
    'author'             => 'Themes-Team (Kay Strobach, Jo Hasenau, Thomas Deuling)',
    'author_email'       => 'typo3@kay-strobach.de',
    'author_company'     => 'private',
    'CGLcompliance'      => '',
    'CGLcompliance_note' => '',
    'constraints'        => [
        'depends' => [
            'typo3'              => '7.6.0-',
            'static_info_tables' => '6.3.0-',
        ],
        'conflicts' => [
            'belayout_tsprovider' => '0.0.0-1.99.99',
            'yaml_parser'         => '0.0.0-1.99.99',
        ],
        'suggests' => [
        ],
    ],
    '_md5_values_when_last_written' => '',
];
