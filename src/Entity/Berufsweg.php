<?php

namespace App\Entity;

use App\Repository\BerufswegRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BerufswegRepository::class)]
class Berufsweg
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $berufsweg;

    #[ORM\OneToMany(mappedBy: 'berufsweg', targetEntity: Lebenslauf::class)]
    private $lebenslaufs;

    #[ORM\OneToMany(mappedBy: 'rel', targetEntity: Csv::class)]
    private $csvs;

    public function __construct()
    {
        $this->lebenslaufs = new ArrayCollection();
        $this->csvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBerufsweg(): ?string
    {
        return $this->berufsweg;
    }

    public function setBerufsweg(string $berufsweg): self
    {
        $this->berufsweg = $berufsweg;

        return $this;
    }

    /**
     * @return Collection<int, Lebenslauf>
     */
    public function getLebenslaufs(): Collection
    {
        return $this->lebenslaufs;
    }

    public function addLebenslauf(Lebenslauf $lebenslauf): self
    {
        if (!$this->lebenslaufs->contains($lebenslauf)) {
            $this->lebenslaufs[] = $lebenslauf;
            $lebenslauf->setBerufsweg($this);
        }

        return $this;
    }

    public function removeLebenslauf(Lebenslauf $lebenslauf): self
    {
        if ($this->lebenslaufs->removeElement($lebenslauf)) {
            // set the owning side to null (unless already changed)
            if ($lebenslauf->getBerufsweg() === $this) {
                $lebenslauf->setBerufsweg(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->berufsweg;
    }

    /**
     * @return Collection<int, Csv>
     */
    public function getCsvs(): Collection
    {
        return $this->csvs;
    }

    public function addCsv(Csv $csv): self
    {
        if (!$this->csvs->contains($csv)) {
            $this->csvs[] = $csv;
            $csv->setRel($this);
        }

        return $this;
    }

    public function removeCsv(Csv $csv): self
    {
        if ($this->csvs->removeElement($csv)) {
            // set the owning side to null (unless already changed)
            if ($csv->getRel() === $this) {
                $csv->setRel(null);
            }
        }

        return $this;
    }

}
