<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\CocktailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function navBar(CategoryRepository $categoryRepository): Response
    {
        return $this->render("Bricks/navbar.html.twig", [
            "categories" => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render("index.html.twig");
    }
}
