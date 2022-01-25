<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Product;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ManagerRegistry $doctrine): Response
    {
    	if ($this->getUser()) {
    		$product = $doctrine->getRepository(Product::class)->getPaginateLatest(0);
	        // dump($product);
	        return $this->render('home/index.html.twig', [
	            'user' => $this->getUser(),
	            'product' => $product
	        ]);
    	}
    	else{
    		return $this->redirectToRoute('app_login');
    	}
    }
}
