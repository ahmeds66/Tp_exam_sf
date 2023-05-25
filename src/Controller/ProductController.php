<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route('/product', name='app_product')
     */
    
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
 /**
    * @Route("/product/{id}", name="app_product_show")
    */
    #The function show() is used to show a product
    function show($id){
        return $this->render('product/show.html.twig', [
            'id' => $id,
        ]);
    }
}
