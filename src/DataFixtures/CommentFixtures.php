<?php

namespace App\DataFixtures;

use App\Entity\Cocktail;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    const COMMENT_NUMBER = 100;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i=1; $i<=self::COMMENT_NUMBER; $i++) {
            $comment = new Comment();
            /** @var Cocktail $cocktail */
            $cocktail = $this->getReference("cocktail_".rand(0, CocktailFixtures::COCKTAIL_NUMBER));
            $comment
                ->setName($faker->name)
                ->setCreatedAt($faker->dateTime)
                ->setComment($faker->paragraph)
                ->setCocktail($cocktail)
            ;
            $manager->persist($comment);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CocktailFixtures::class,
        ];
    }
}
