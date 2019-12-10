<?php

namespace App\DataFixtures;

use App\Entity\Cocktail;
use App\Entity\Rate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class RateFixtures extends Fixture implements DependentFixtureInterface
{
    const RATE_NUMBER = 300;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i=0; $i<=self::RATE_NUMBER; $i++) {
            $rate = new Rate();
            /** @var Cocktail $cocktail */
            $cocktail = $this->getReference("cocktail_".rand(0, CocktailFixtures::COCKTAIL_NUMBER));
            $rate
                ->setCocktail($cocktail)
                ->setRate($faker->numberBetween(0,5))
            ;
            $manager->persist($rate);
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
