<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class PostFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    public const POST_REFERENCE = 'post';


    public function load(ObjectManager $manager): void
    {
        $post = new Post();
        $post->setText('...Странная вещь время, удивительная штука...
            Когда ты молодой, у тебя полно времени, разбрасываешься им налево и направо...
            Пару лет туда, пару лет сюда...
            А потом становишься старше, и вдруг "Господи,сколько мне осталось?
            Тридцать пять зим?"...
            Только подумай...тридцать пять зим....'
        );

        $this->addReference(self::POST_REFERENCE, $post);

        $manager->persist($post);
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['FakeDataGroup'];
    }
}
