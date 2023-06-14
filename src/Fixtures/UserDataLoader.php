<?php

namespace Htlw3r\DoctrineOrm\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Htlw3r\DoctrineOrm\Model\Game;

class UserDataLoader implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $game = new Game();
        $game->setId('1');
        $game->setFkSymbol1('ro');
        $game->setFkSymbol2('pa');
        $game->setPlayer1('Moritz');
        $game->setPlayer2('Chrisi');
        $game->setDate('2023-06-13');

        $manager->persist($game);
        $manager->flush();
    }
}