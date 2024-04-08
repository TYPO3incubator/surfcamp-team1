<?php

namespace Surfcamp\Corporate\Controller;

use Psr\Http\Message\ResponseInterface;
use Surfcamp\Corporate\Domain\Model\Product;
use Surfcamp\Corporate\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProductController extends ActionController
{

    public function __construct(protected readonly ProductRepository $productRepository)
    {
    }

    public function teaserAction(): ResponseInterface
    {
        $this->view->assignMultiple([
            'products' => $this->productRepository->findAll(),
        ]);

        return $this->htmlResponse();
    }

    public function showAction(Product $product): ResponseInterface
    {
        $this->view->assignMultiple([
            'product' => $product,
        ]);
        return $this->htmlResponse();

    }
}