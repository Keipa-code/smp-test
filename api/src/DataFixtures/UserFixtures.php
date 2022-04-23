<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class UserFixtures extends Fixture implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setFirstName('Влад');
        $user1->setLastName('Лодоба');
        $this->addReference('user1', $user1);

        $user2 = new User();
        $user2->setFirstName('Григорий');
        $user2->setLastName('Цикало');
        $this->addReference('user2', $user2);

        $user3 = new User();
        $user3->setFirstName('Айбек');
        $user3->setLastName('Муханжанов');
        $this->addReference('user3', $user3);

        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);

        $manager->flush();
    }
}
