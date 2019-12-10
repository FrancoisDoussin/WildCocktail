<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Cocktail;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CocktailFixtures extends Fixture implements DependentFixtureInterface
{
    const COCKTAIL_NUMBER = 100;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i=0; $i<=self::COCKTAIL_NUMBER; $i++) {
            $cocktail = new Cocktail();
            /** @var Category $category */
            $category = $this->getReference("category_".rand(0, CategoryFixtures::CATEGORY_NUMBER));
            $cocktail
                ->setName($faker->word)
                ->setImage($faker->imageUrl(500, 500, "food"))
                ->setCreatedAt($faker->dateTime())
                ->setDescription($faker->paragraph)
                ->setIngredients($faker->paragraph)
                ->setReceipe($faker->paragraph)
                ->setCategory($category)
            ;
            $this->addReference("cocktail_".$i, $cocktail);
            $manager->persist($cocktail);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
