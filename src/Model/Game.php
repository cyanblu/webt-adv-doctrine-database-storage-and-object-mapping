<?php

// src/Bullet.php
namespace Htlw3r\DoctrineOrm\Model;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
#[ORM\Table(name: 'game')]
class Game
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'datetime')]
    private DateTime $date;
    #[ORM\Column(type: 'string', length: 255)]
    private string $player1;
    #[ORM\Column(type: 'string', length: 255)]
    private string $player2;
    #[ORM\Column(type: 'integer')]
    /**
     * @ManyToOne(targetEntity="Symbol")
     */
    private int $fk_symbol1;
    #[ORM\Column(type: 'integer')]
    /**
     * @ManyToOne(targetEntity="Symbol")
     */
    private int $fk_symbol2;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getPlayer1(): string
    {
        return $this->player1;
    }

    /**
     * @param string $player1
     */
    public function setPlayer1(string $player1): void
    {
        $this->player1 = $player1;
    }

    /**
     * @return string
     */
    public function getPlayer2(): string
    {
        return $this->player2;
    }

    /**
     * @param string $player2
     */
    public function setPlayer2(string $player2): void
    {
        $this->player2 = $player2;
    }

    /**
     * @return string
     */
    public function getFkSymbol1(): int
    {
        return $this->fk_symbol1;
    }

    /**
     * @param string $fk_symbol1
     */
    public function setFkSymbol1(int $fk_symbol1): void
    {
        $this->fk_symbol1 = $fk_symbol1;
    }

    /**
     * @return string
     */
    public function getFkSymbol2(): int
    {
        return $this->fk_symbol2;
    }

    /**
     * @param string $fk_symbol2
     */
    public function setFkSymbol2(int $fk_symbol2): void
    {
        $this->fk_symbol2 = $fk_symbol2;
    }
}
