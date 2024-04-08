<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Page extends AbstractEntity
{
    /**
     * Publication category
     *
     * @var Category
     */
    protected $publicationCategory = null;

    /**
     * @return Category
     */
    public function getPublicationCategory()
    {
        return $this->publicationCategory;
    }
}
