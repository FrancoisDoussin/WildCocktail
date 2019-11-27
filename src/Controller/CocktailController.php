<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CocktailController extends AbstractController
{
    /**
     * @Route("/category/{id}", name="cocktail")
     */
    public function index(Category $category)
    {
        return $this->render('cocktail/index.html.twig', [
            'category' => $category,
        ]);
    }
}
