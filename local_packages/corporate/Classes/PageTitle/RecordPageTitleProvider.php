<?php

namespace Surfcamp\Corporate\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class RecordPageTitleProvider extends AbstractPageTitleProvider
{
    public function setTitle(string $title, $prependPageTitle = true): void
    {
        if($prependPageTitle){
            $title = $this->getTypoScriptFrontendController()->page['title'] . ' - ' . $title;
        }

        $this->title = $title;
    }

    private function getTypoScriptFrontendController(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }
}