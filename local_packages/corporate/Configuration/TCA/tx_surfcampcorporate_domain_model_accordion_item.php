<?php

$tableName   = 'tx_surfcampcorporate_domain_model_accordion_item';
$translation = 'LLL:EXT:corporate/Resources/Private/Language/locallang_db.xlf:' . $tableName;

return [
    'ctrl'      => [
        'label'                    => 'header',
        'cacheTags'                => 'accordion_item',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'title'                    => $translation,
        'delete'                   => 'deleted',
        'versioningWS'             => false,
        'origUid'                  => 't3_origuid',
        'hideAtCopy'               => true,
        'prependAtCopy'            => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField$' => 'l10n_diffsource',
        'languageField'            => 'sys_language_uid',
        'sortby'                   => 'sorting',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ],
        'hideTable' => true,
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
            bodytext,
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
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => $translation . '.bodytext',
            'config' => [
                'type' => 'text',
                'cols' => 80,
                'rows' => 15,
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ],
        ],
    ],
];
