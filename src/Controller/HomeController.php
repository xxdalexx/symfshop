<?php

namespace App\Controller;

use App\Entity\Product;
use Random\RandomException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
    public function index(Request $request): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/shop', name: 'shop', methods: ['GET'])]
    public function shop(): Response
    {
        return $this->render('shop.html.twig');
    }

    #[Route('/product', name: 'product.show', methods: ['GET'])]
    public function shopSingle(): Response
    {
        return $this->render('shop-single.html.twig');
    }

    #[Route('/cart', name: 'cart', methods: ['GET'])]
    public function cart(): Response
    {
        return $this->render('cart.html.twig');
    }

    #[Route('/checkout', name: 'checkout', methods: ['GET'])]
    public function checkout(): Response
    {
        return $this->render('checkout.html.twig');
    }

    #[Route('/thank-you', name: 'thank-you', methods: ['GET'])]
    public function thankYou(): Response
    {
        return $this->render('thank-you.html.twig');
    }

    #[Route('/testing', name: 'testing', methods: ['GET'])]
    public function testing(): Response
    {
        return $this->render('testing.html.twig');
    }
}