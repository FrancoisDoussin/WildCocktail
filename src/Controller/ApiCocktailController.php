<?php

namespace App\Controller;

use App\Entity\Cocktail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */
class ApiCocktailController extends AbstractController
{
    /**
     * @Route(
     *     "/cocktails/{id}",
     *     name="get_cocktail",
     *     methods={"GET"},
     *     options = { "expose" = true }
     * )
     */
    public function getCocktail(Cocktail $cocktail): JsonResponse
    {
        return $this->json($cocktail, 200, [], [
            'groups' => 'cocktail-selector',
        ]);
    }
}
