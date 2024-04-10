<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Product extends AbstractEntity
{

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    protected $images = '';

    /**
     * @var string
     */
    protected $lead = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $categories = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Surfcamp\Corporate\Domain\Model\ProductSize>
     */
    protected $sizes;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Surfcamp\Corporate\Domain\Model\AccordionItem>
     */
    protected $accordionItems;

    /**
     * @var \DateTime
     */
    protected $starttime = 0;

    /**
     * @var \DateTime
     */
    protected $endtime = 0;

    public function __construct()
    {
        $this->initializeObject();
    }

    public function initializeObject(): void
    {
        $this->accordionItems = new ObjectStorage();
        $this->sizes          = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImages(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage|string
    {
        return $this->images;
    }

    public function getLead(): string
    {
        return $this->lead;
    }

    public function getCategories(): ?\TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->categories;
    }

    public function getSizes(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->sizes;
    }

    public function getAccordionItems(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->accordionItems;
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
