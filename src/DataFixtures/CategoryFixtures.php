<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CategoryFixtures extends Fixture
{
    const CATEGORY_NUMBER = 10;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i=0; $i<=self::CATEGORY_NUMBER; $i++) {
            $category = new Category();
            $category->setName($faker->word);
            $category->setImage($faker->imageUrl(300, 300, "food"));
            $this->addReference("category_".$i, $category);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
