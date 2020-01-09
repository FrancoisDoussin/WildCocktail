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
    const COCKTAIL_NUMBER = 500;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i=0; $i<=2; $i++) {
            $rhumCocktail = new Cocktail();
            /** @var Category $category */
            $category = $this->getReference("rhum");
            $rhumCocktail
                ->setName("Rhum Cockail ".$i)
                ->setImage($faker->imageUrl(500, 500, "food"))
                ->setCreatedAt($faker->dateTime())
                ->setDescription($faker->text(2000))
                ->setIngredients($faker->text(2000))
                ->setReceipe($faker->text(5000))
                ->setCategory($category)
            ;
            $this->addReference("rhumcocktail_".$i, $rhumCocktail);
            $manager->persist($rhumCocktail);
        }

        for ($i=0; $i<=self::COCKTAIL_NUMBER; $i++) {
            $cocktail = new Cocktail();
            /** @var Category $category */
            $category = $this->getReference("category_".rand(0, CategoryFixtures::CATEGORY_NUMBER));
            $cocktail
                ->setName($faker->word)
                ->setImage($faker->imageUrl(500, 500, "food"))
                ->setCreatedAt($faker->dateTime())
                ->setDescription($faker->text(2000))
                ->setIngredients($faker->text(2000))
                ->setReceipe($faker->text(5000))
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
