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
     * @var \TYPO3\CMS\Extbase\Domain\Model\Category
     */
    protected $category = null;

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

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getImage(): FileReference|string
    {
        return $this->image;
    }

    public function setImage(FileReference|string $image): void
    {
        $this->image = $image;
    }

    public function getLead(): string
    {
        return $this->lead;
    }

    public function setLead(string $lead): void
    {
        $this->lead = $lead;
    }

    public function getCategory(): ?\TYPO3\CMS\Extbase\Domain\Model\Category
    {
        return $this->category;
    }

    public function setCategory(?\TYPO3\CMS\Extbase\Domain\Model\Category $category): void
    {
        $this->category = $category;
    }

    public function getStarttime(): \DateTime|int
    {
        return $this->starttime;
    }

    public function setStarttime(\DateTime|int $starttime): void
    {
        $this->starttime = $starttime;
    }

    public function getEndtime(): \DateTime|int
    {
        return $this->endtime;
    }

    public function setEndtime(\DateTime|int $endtime): void
    {
        $this->endtime = $endtime;
    }
}
