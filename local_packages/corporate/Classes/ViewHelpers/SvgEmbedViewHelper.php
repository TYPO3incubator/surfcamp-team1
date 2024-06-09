<?php

namespace Surfcamp\Corporate\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class SvgEmbedViewHelper extends AbstractViewHelper
{
    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('image', 'string', 'Extension path to a file in this format: EXT:corporate/...', true);
    }

    /**
     * @return false|string|null
     */
    public function render()
    {
        $image = $this->arguments['image'];

        if (is_string($image)) {
            return file_get_contents(GeneralUtility::getFileAbsFileName($image));
        }

        return false;
    }
}