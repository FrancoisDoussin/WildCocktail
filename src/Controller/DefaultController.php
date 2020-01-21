<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render("index.html.twig");
    }

    /**
     * @Route("/party", name="party")
     */
    public function party()
    {
        return $this->render("party.html.twig");
    }

    public function renderNavBar(CategoryRepository $categoryRepository): Response
    {
        return $this->render('Bricks/_navbar.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    public function renderFooter(CategoryRepository $categoryRepository): Response
    {
        return $this->render('Bricks/_footer.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
