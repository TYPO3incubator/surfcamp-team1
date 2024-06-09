<?php

namespace Surfcamp\Corporate\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\Category;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Product extends AbstractEntity
{

    protected string $title = '';

    protected string $articleNumber = '';

    protected string $lead = '';

    /**
     * @var ObjectStorage<FileReference>
     */
    protected $images;

    /**
     * @var ObjectStorage<Category>
     */
    protected $categories;

    /**
     * @var ObjectStorage<ProductSize>
     */
    protected $sizes;

    /**
     * @var ObjectStorage<AccordionItem>
     */
    protected $accordionItems;

    public function __construct()
    {
        $this->initializeObject();
    }

    public function initializeObject(): void
    {
        $this->categories     = new ObjectStorage();
        $this->accordionItems = new ObjectStorage();
        $this->sizes          = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    public function getLead(): string
    {
        return $this->lead;
    }

    public function getImages(): ObjectStorage|string
    {
        return $this->images;
    }

    public function getCategories(): ?ObjectStorage
    {
        return $this->categories;
    }

    public function getSizes(): ObjectStorage
    {
        return $this->sizes;
    }

    public function getAccordionItems(): ObjectStorage
    {
        return $this->accordionItems;
    }
}
