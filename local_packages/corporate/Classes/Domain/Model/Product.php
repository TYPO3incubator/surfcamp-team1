<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Product extends AbstractEntity
{

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = '';

    /**
     * @var string
     */
    protected $lead = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $categories = null;

    /**
     * @var \DateTime
     */
    protected $starttime = 0;

    /**
     * @var \DateTime
     */
    protected $endtime = 0;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImage(): string|FileReference
    {
        return $this->image;
    }

    public function getLead(): string
    {
        return $this->lead;
    }

    public function getCategories(): ?\TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->categories;
    }

    public function getStarttime(): \DateTime|int
    {
        return $this->starttime;
    }

    public function getEndtime(): \DateTime|int
    {
        return $this->endtime;
    }
}
