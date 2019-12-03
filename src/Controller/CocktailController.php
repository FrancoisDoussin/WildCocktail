<?php

namespace App\Controller;

use App\Entity\Cocktail;
use App\Entity\Comment;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cocktail", name="cocktail_")
 */
class CocktailController extends AbstractController
{
    /**
     * @Route("/{id}", name="detail")
     */
    public function index(
        Cocktail $cocktail,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $comment = new Comment();

        $commentForm = $this
            ->createForm(CommentType::class, $comment)
            ->remove('cocktail')
            ->add('Send', SubmitType::class)
        ;

        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {

            $comment->setCocktail($cocktail);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('cocktail_detail', [
                'id' => $cocktail->getId(),
            ]);
        }

        return $this->render('Cocktail/detail.html.twig', [
            'cocktail' => $cocktail,
            'commentForm' => $commentForm->createView(),
        ]);
    }
}
