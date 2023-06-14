<?php

namespace Htlw3r\DoctrineOrm\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Htlw3r\DoctrineOrm\Model\Game;
use Htlw3r\DoctrineOrm\Model\Symbol;

class UserDataLoader implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $symbol1 = new Symbol();
        $symbol1->setPkSymbolID(1);
        $symbol1->setSymbolPlayed("ro");
        $manager->persist($symbol1);
        $symbol2 = new Symbol();
        $symbol2->setPkSymbolID(2);
        $symbol2->setSymbolPlayed("pa");
        $manager->persist($symbol2);
        $symbol3 = new Symbol();
        $symbol3->setPkSymbolID(3);
        $symbol3->setSymbolPlayed("sc");
        $manager->persist($symbol3);
        $manager->flush();


        $game = new Game();
        $game->setId('0');
        $game->setFkSymbol1(1);
        $game->setFkSymbol2(2);
        $game->setPlayer1('Moritz');
        $game->setPlayer2('Chrisi');
        $game->setDate(new \DateTime("2021-7-25 12:00:00"));

        $manager->persist($game);
        $manager->flush();
    }
}