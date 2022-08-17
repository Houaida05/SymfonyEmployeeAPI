<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('en_EN');
    }

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 50; $i++) {

            $employee = new Employee();
            $employee->setFirstname($this->faker->firstName())->setLastname($this->faker->lastName())
                ->setEmail($this->faker->email());
            $manager->persist($employee);
        }


        $manager->flush();
    }
}
