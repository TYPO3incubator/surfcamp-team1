<?php

$tableName   = 'tx_surfcampcorporate_domain_model_product';
$translation = 'LLL:EXT:corporate/Resources/Private/Language/locallang_db.xlf:' . $tableName;

return [
    'ctrl'      => [
        'label'                    => 'title',
        'cacheTags'                => 'product',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'title'                    => $translation,
        'delete'                   => 'deleted',
        'versioningWS'             => false,
        'origUid'                  => 't3_origuid',
        'hideAtCopy'               => true,
        'prependAtCopy'            => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField'            => 'sys_language_uid',
        'sortby'                   => 'sorting',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ],
        'security' => [
            'ignorePageTypeRestriction' => false,
        ],
        'searchFields'             => 'title,lead',
        'iconfile'                 => 'EXT:corporate/Resources/Public/Icons/TCA/' . $tableName . '.svg',
    ],
    'types'     => [
        '0' => [
            'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;;title,
            article_number,
            lead,
            images,
            sizes,
            accordion_items,
            --div--;' . $translation . '.tabs.taxonomy,
            categories,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        ',
        ],
    ],
    'palettes'  => [
        'access'     => [
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ],
        'visibility' => [
            'showitem' => '
                hidden,
            ',
        ],
        'title'      => [
            'showitem' => '
                title,
                slug,
            ',
        ],
    ],
    'columns'   => [
        'title' => [
            'exclude' => 1,
            'label'   => $translation . '.title',
            'config'  => [
                'type' => 'input',
                'eval' => 'trim,required',
            ],
        ],
        'slug'  => [
            'label'   => $translation . '.slug',
            'exclude' => 1,
            'config'  => [
                'type'              => 'slug',
                'generatorOptions'  => [
                    'fields'               => ['title'],
                    'fieldSeparator'       => '/',
                    'prefixParentPageSlug' => true,
                    'replacements'         => [
                        '/' => '',
                    ],
                ],
                'fallbackCharacter' => '-',
                'eval'              => 'uniqueInSite',
                'default'           => '',
            ],
        ],
        'article_number' => [
            'exclude' => 1,
            'label'   => $translation . '.article_number',
            'config'  => [
                'type' => 'input',
                'eval' => 'trim,required',
            ],
        ],
        'lead'  => [
            'exclude' => 1,
            'label'   => $translation . '.lead',
            'config'  => [
                'type' => 'text',
                'cols' => 50,
                'rows' => 6,
                'eval' => 'trim,required',
            ],
        ],
        'images' => [
            'exclude' => 1,
            'label'  => $translation . '.images',
            'l10n_mode' => 'exclude',
            'config' => [
                'type'     => 'file',
                'minitems' => 1,
                'maxitems' => 9,
                'allowed'  => 'common-image-types',
            ],
        ],
        'sizes' => [
            'exclude' => 1,
            'label' => $translation . '.sizes',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_surfcampcorporate_domain_model_product_size',
                'foreign_field' => 'parent_id',
                'foreign_table_field' => 'tablenames',
                'appearance' => [
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                ],
            ],
        ],
        'accordion_items' => [
            'exclude' => 1,
            'label' => $translation . '.accordion_items',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_surfcampcorporate_domain_model_accordion_item',
                'foreign_field' => 'parent_id',
                'foreign_table_field' => 'tablenames',
                'appearance' => [
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                ],
            ],
        ],
        'categories' => [
            'config' => [
                'type' => 'category',
                'treeConfig' => [
                    'startingPoints' => '###SITE:corporate.product.categoryRootUid###',
                ],
            ]
        ],
    ],
];
