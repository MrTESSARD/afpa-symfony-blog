<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'blog.index')]
    public function index(): Response
    {
        $posts = [
            [
                "title" => "Article 1",
                "description" => "Description 1"
            ],
            [
                "title" => "Article 2",
                "description" => "Description 2"
            ]
        ];

        return $this->render('blog/index.html.twig', [
            "posts" => $posts
        ]);
    }

    #[Route('/contact', name: 'blog.contact')]
    public function contact(): Response
    {
        return $this->render('blog/contact.html.twig');
    }
}
