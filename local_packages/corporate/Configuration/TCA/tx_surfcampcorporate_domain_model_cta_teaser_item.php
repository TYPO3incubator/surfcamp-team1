<?php

$tableName   = 'tx_surfcampcorporate_domain_model_cta_teaser_item';
$translation = 'LLL:EXT:corporate/Resources/Private/Language/locallang_db.xlf:' . $tableName;

return [
    'ctrl'      => [
        'label'                    => 'header',
        'cacheTags'                => 'cta_teaser_item',
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
            'ignorePageTypeRestriction' => true,
        ],
        'searchFields'             => 'title,bodytext',
        'iconfile'                 => 'EXT:corporate/Resources/Public/Icons/TCA/' . $tableName . '.svg',
    ],
    'types'     => [
        '0' => [
            'showitem' => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;' . $translation . 'tca.palette.title;title,
            header,
            date,
            bodytext,
            image,
            link,
            link_label,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access
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
        'header' => [
            'exclude' => 1,
            'label'   => $translation . '.header',
            'config'  => [
                'type' => 'input',
                'eval' => 'trim,required',
            ],
        ],
        'date' => [
            'exclude' => true,
            'label' => $translation . '.date',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'default' => 0,
            ],
        ],
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => $translation . '.bodytext',
            'config' => [
                'type' => 'text',
                'cols' => 80,
                'rows' => 15,
            ],
        ],
        'image' => [
            'label'  => $translation . '.image',
            'config' => [
                'type'     => 'file',
                'minitems' => 1,
                'maxitems' => 1,
                'allowed'  => 'common-image-types',
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => $translation . '.link',
            'config' => [
                'type' => 'link',
                'size' => 50,
                'allowedTypes' => ['url']
            ],
        ],
        'link_label' => [
            'exclude' => true,
            'label' => $translation . '.link_label',
            'config' => [
                'type' => 'link',
                'size' => 50,
                'appearance' => [
                    'browserTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ],
            ],
        ],

    ],
];
