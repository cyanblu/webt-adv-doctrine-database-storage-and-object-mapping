<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'symbol')]
class Symbol
{
#[ORM\Id]
#[ORM\Column(type: 'integer')]
#[ORM\GeneratedValue]
private int|null $pk_symbolID = null;
#[ORM\Column(type: 'string', length: 2)]
/**
 * @OneToMany(
 */
private string $symbolPlayed;

    /**
* @return int|null
*/
public function getPkSymbolID(): ?int
{
return $this->pk_symbolID;
}

/**
* @param int|null $pk_symbolID
*/
public function setPkSymbolID(?int $pk_symbolID): void
{
$this->pk_symbolID = $pk_symbolID;
}

/**
* @return string
*/
public function getSymbolPlayed(): string
{
return $this->symbolPlayed;
}

/**
* @param string $symbolPlayed
*/
public function setSymbolPlayed(string $symbolPlayed): void
{
$this->symbolPlayed = $symbolPlayed;
}


}