<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Surfcamp\Corporate\Controller\ProductController;

defined('TYPO3') or die();

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