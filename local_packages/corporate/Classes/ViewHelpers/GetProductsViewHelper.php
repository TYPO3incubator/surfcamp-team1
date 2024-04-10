<?php

namespace Surfcamp\Corporate\ViewHelpers;

use Surfcamp\Corporate\Domain\Repository\ProductRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class GetProductsViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
    }

    public function render()
    {
        $productRepository = GeneralUtility::makeInstance(ProductRepository::class);
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        // Show comments from all pages
        $querySettings->setRespectStoragePage(false);
        $productRepository->setDefaultQuerySettings($querySettings);
        $templateVariableContainer = $this->renderingContext->getVariableProvider();
        $templateVariableContainer->add('products', $productRepository->findAll());
    }
}