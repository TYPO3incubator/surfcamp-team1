<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

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

        'label' => 'LLL:EXT:corporate/Resources/Private/Language/locallang.xlf:corporate_hero.title',
        'value' => 'corporate_hero',
        'icon' => 'mimetypes-x-content-image',
        'group' => 'common',
        'description' => 'LLL:EXT:corporate/Resources/Private/Language/locallang.xlf:corporate_hero.description',
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
            'label' => 'LLL:EXT:corporate/Resources/Private/Language/locallang.xlf:label.link_text',
        ],
        'media' => [
            'config' => [
                'maxitems' => 1,
                'allowed' => 'common-media-types'
            ],

        ],
    ],
];
