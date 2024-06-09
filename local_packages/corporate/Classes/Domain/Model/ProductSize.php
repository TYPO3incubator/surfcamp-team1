<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ProductSize extends AbstractEntity
{

    protected string $title = '';

    protected string $bodytext = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBodytext(): string
    {
        return $this->bodytext;
    }
}
