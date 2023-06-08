<?php

namespace App\Entity;

use App\Repository\LebenslaufRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

#[ORM\Entity(repositoryClass: LebenslaufRepository::class)]
class Lebenslauf
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $datebegin;

    #[ORM\Column(type: 'string', length: 255)]
    private $dateend;

    #[ORM\Column(type: 'string', length: 255)]
    private $firma;

    #[ORM\Column(type: 'string', length: 255)]
    private $info;

    #[ORM\ManyToOne(targetEntity: Berufsweg::class, inversedBy: 'lebenslaufs', fetch:'EAGER')]
    #[ORM\JoinColumn(name: 'berufsweg', referencedColumnName: 'id', nullable: false)]
    private $berufsweg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatebegin(): ?string
    {
        return $this->datebegin;
    }

    public function setDatebegin(string $datebegin): self
    {
        $this->datebegin = $datebegin;

        return $this;
    }

    public function getDateend(): ?string
    {
        return $this->dateend;
    }

    public function setDateend(string $dateend): self
    {
        $this->dateend = $dateend;

        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(string $firma): self
    {
        $this->firma = $firma;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getBerufsweg(): ?Berufsweg
    {
        return $this->berufsweg;
    }

    public function setBerufsweg(?Berufsweg $berufsweg): self
    {
        $this->berufsweg = $berufsweg;

        return $this;
    }

    public function __toString()
    {
        return $this->berufsweg;
    }
}
