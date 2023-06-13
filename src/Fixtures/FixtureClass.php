<?php

namespace Htlw3r\DoctrineOrm\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
class FixtureClass implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('jwage');
        $user->setPassword('test');

        $manager->persist($user);
        $manager->flush();
    }
}