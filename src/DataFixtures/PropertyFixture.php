<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++) {
            $property = new Property();
            $property
                ->setTitle($faker->words(3, true))
                ->setDescription($faker->sentences( 3, true))
                ->setSurface($faker->numberBetween(20, 350))
                ->SetRooms($faker->numberBetween(2, 10))
                ->SetBedRooms($faker->numberBetween(1, 9))
                ->SetFloor($faker->numberBetween(0, 15))
                ->SetPrice($faker->numberBetween(10000, 10000000))
                ->SetHeat($faker->numberBetween(0, count(Property::HEAT) -1))
                ->SetCity($faker->city)
                ->SetAddress($faker->address)
                ->SetPostalCode($faker->postcode)
                ->SetSold(false);

            $manager->persist($property);
            

            }
            
        $manager->flush();
    }
}
