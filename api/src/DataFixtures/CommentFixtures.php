<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class CommentFixtures extends Fixture implements DependentFixtureInterface, FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $comment1 = new Comment();
        $comment1->setText('Очень мудро');
        $comment1->setUserId($this->getReference('user1'));

        $comment2 = new Comment();
        $comment2->setText('Грустно от такого...');
        $comment2->setUserId($this->getReference('user2'));

        $comment3 = new Comment();
        $comment3->setText('Нормально же 35 зим, что жалуешься?');
        $comment3->setUserId($this->getReference('user3'));


        $comments = [$comment1, $comment2, $comment3];

        foreach ($comments as $item) {
            $manager->persist($item);
        }

        /** @var Post $post */
        $post = $this->getReference(PostFixtures::POST_REFERENCE);

        $post->addComment($comment1);
        $post->addComment($comment2);
        $post->addComment($comment3);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
            PostFixtures::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['FakeDataGroup'];
    }
}
