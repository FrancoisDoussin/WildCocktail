<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/category", name="category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/show/{id}", name="index")
     */
    public function index(Category $category): Response
    {
        return $this->render('category/index.html.twig', [
            'category' => $category,
        ]);
    }
}
