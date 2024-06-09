<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class AccordionItem extends AbstractEntity
{

    protected string $header = '';

    protected string $bodytext = '';

    public function getHeader(): string
    {
        return $this->header;
    }

    public function getBodytext(): string
    {
        return $this->bodytext;
    }
}
