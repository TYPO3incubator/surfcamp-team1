<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class AccordionItem extends AbstractEntity
{

    /**
     * @var string
     */
    protected $header = '';

    /**
     * @var string
     */
    protected $bodytext = '';

    public function getHeader(): string
    {
        return $this->header;
    }

    public function getBodytext(): string
    {
        return $this->bodytext;
    }
}
