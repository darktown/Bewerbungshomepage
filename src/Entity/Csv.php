<?php

namespace App\Entity;

use App\Repository\CsvRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CsvRepository::class)]
class Csv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $firma;

    #[ORM\Column(type: 'text')]
    private $beschreibung;

    #[ORM\Column(type: 'string', length: 255)]
    private $datebegin;

    #[ORM\Column(type: 'string', length: 255)]
    private $dateend;

    #[ORM\Column(type: 'boolean')]
    private $enable;

    #[ORM\ManyToOne(targetEntity: Berufsweg::class, inversedBy: 'csvs')]
    #[ORM\JoinColumn(nullable: false)]
    private $rel;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBeschreibung(): ?string
    {
        return $this->beschreibung;
    }

    public function setBeschreibung(string $beschreibung): self
    {
        $this->beschreibung = $beschreibung;

        return $this;
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

    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    public function getRel(): ?Berufsweg
    {
        return $this->rel;
    }

    public function setRel(?Berufsweg $rel): self
    {
        $this->rel = $rel;

        return $this;
    }
}
