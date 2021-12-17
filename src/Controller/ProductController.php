<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

    
    public function __construct(EntityManagerInterface $entityManager) // le contructeur permet de construir une variable et de l associer a une classe permettant de l utiliser plus bas
    {
        $this->entityManager = $entityManager; // simplification et assigniation de la variable 
    }
    /**
     * @Route("/product", name="product_view")
     */
    public function productView(): Response
    {

        $products = $this->entityManager->getRepository(Product::class)->findAll();

        return $this->render('product/products_view.html.twig',
            [
                'products' => $products,
            ]
        );
    }
}
