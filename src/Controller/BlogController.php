<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog.index')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'ThomasController',
        ]);
    }

    #[Route('/contact', name: 'blog.contact')]
    public function contact(): Response
    {
        return $this->render('blog/contact.html.twig');
    }
}
