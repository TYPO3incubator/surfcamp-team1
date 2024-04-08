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
            --palette--;' . $translation . 'tca.palette.title;title,
            lead,
            image,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;Language,
            sys_language_uid,
            l10n_parent,
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
        'image' => [
            'label'  => $translation . '.image',
            'config' => [
                'type'     => 'file',
                'minitems' => 0,
                'maxitems' => 1,
                'allowed'  => 'common-image-types',
            ],
        ],
    ],
];
