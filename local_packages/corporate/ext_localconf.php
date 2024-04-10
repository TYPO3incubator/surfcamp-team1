<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Surfcamp\Corporate\Controller\ProductController;

defined('TYPO3') or die();

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(
    'module.tx_form {
    settings {
        yamlConfigurations {
            1505042806 = EXT:corporate/Configuration/Yaml/FormSetup.yaml
        }
    }
}'
);

// Product list
ExtensionUtility::configurePlugin(
    'Corporate',
    'ProductTeaser',
    [ProductController::class => 'teaser'],
    [ProductController::class => 'teaser'],
);

ExtensionUtility::configurePlugin(
    'Corporate',
    'ProductShow',
    [ProductController::class => 'show'],
    [ProductController::class => 'show'],
);

if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['productSize'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['productSize'] = 'EXT:corporate/Configuration/RTE/ProductSize.yaml';
}
