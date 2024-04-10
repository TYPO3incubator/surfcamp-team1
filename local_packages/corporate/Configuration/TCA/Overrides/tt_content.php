<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$translation = 'LLL:EXT:corporate/Resources/Private/Language/locallang_db.xlf';

(static function (): void {
    ExtensionUtility::registerPlugin(
        'Corporate',
        'ProductTeaser',
        'ProductTeaser',
    );

    ExtensionUtility::registerPlugin(
        'Corporate',
        'ProductShow',
        'ProductShow',
    );
})();

######################################
#           Hero element             #
######################################

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [

        'label' => $translation . ':corporate_hero.title',
        'value' => 'corporate_hero',
        'icon' => 'mimetypes-x-content-image',
        'group' => 'common',
        'description' => $translation . ':corporate_hero.description',
    ],
    'textmedia',
    'after',
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['corporate_hero'] = 'mimetypes-x-content-image';
$GLOBALS['TCA']['tt_content']['types']['corporate_hero'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
                media, header, bodytext, header_link, subheader,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         ',
    'columnsOverrides' => [
        'subheader' => [
            'label' => $translation . ':label.link_text',
        ],
        'media' => [
            'config' => [
                'maxitems' => 1,
                'allowed' => 'common-media-types'
            ],

        ],
    ],
];

######################################
#       Text Button element          #
######################################

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [

        'label' => $translation . ':corporate_text_button.title',
        'value' => 'corporate_text_button',
        'icon' => 'content-form',
        'group' => 'common',
        'description' => $translation . ':corporate_text_button.description',
    ],
    'textmedia',
    'after',
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['corporate_text_button'] = 'content-form';
$GLOBALS['TCA']['tt_content']['types']['corporate_text_button'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
              bodytext, header_link, subheader,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         ',
    'columnsOverrides' => [
        'subheader' => [
            'label' => $translation . ':label.link_text',
        ],
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],

        ],
    ],
];

######################################
#       CTA Teaser              #
######################################

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [

        'label' => $translation . ':corporate_cta_teaser.title',
        'value' => 'corporate_cta_teaser',
        'icon' => 'mimetypes-x-content-link',
        'group' => 'common',
        'description' => $translation . ':corporate_cta_teaser.description',
    ],
    'textmedia',
    'after',
);
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['corporate_cta_teaser'] = 'mimetypes-x-content-link';
$GLOBALS['TCA']['tt_content']['types']['corporate_cta_teaser'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
              header, image, date, bodytext, header_link, subheader,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         ',
    'columnsOverrides' => [
        'subheader' => [
            'label' => $translation . ':label.link_text',
        ],
        'header_link' => [
            'config' => [
                'allowedTypes' => ['page', 'url', 'record'],
            ],
        ],
        'bodytext' => [
            'config' => [
                'enableRichtext' => false,
            ],

        ],
    ],
];
