<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaleRepository")
 */
class Sale
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pavadinimas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $miestas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gatve;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $namoNr;

    /**
     * @ORM\Column(type="time")
     */
    private $dirbaNuo;

    /**
     * @ORM\Column(type="time")
     */
    private $dirbaIki;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tipas", inversedBy="relation")
     */
    private $tipas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonementas", mappedBy="sale")
     */
    private $abonementai;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Darbuotojas", mappedBy="sale")
     */
    private $darbuotojai;

    public function __construct()
    {
        $this->abonementai = new ArrayCollection();
        $this->darbuotojai = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPavadinimas(): ?string
    {
        return $this->pavadinimas;
    }

    public function setPavadinimas(string $pavadinimas): self
    {
        $this->pavadinimas = $pavadinimas;

        return $this;
    }

    public function getMiestas(): ?string
    {
        return $this->miestas;
    }

    public function setMiestas(string $miestas): self
    {
        $this->miestas = $miestas;

        return $this;
    }

    public function getGatve(): ?string
    {
        return $this->gatve;
    }

    public function setGatve(string $gatve): self
    {
        $this->gatve = $gatve;

        return $this;
    }

    public function getNamoNr(): ?string
    {
        return $this->namoNr;
    }

    public function setNamoNr(string $namoNr): self
    {
        $this->namoNr = $namoNr;

        return $this;
    }

    public function getDirbaNuo(): ?\DateTimeInterface
    {
        return $this->dirbaNuo;
    }

    public function setDirbaNuo(\DateTimeInterface $dirbaNuo): self
    {
        $this->dirbaNuo = $dirbaNuo;

        return $this;
    }

    public function getDirbaIki(): ?\DateTimeInterface
    {
        return $this->dirbaIki;
    }

    public function setDirbaIki(\DateTimeInterface $dirbaIki): self
    {
        $this->dirbaIki = $dirbaIki;

        return $this;
    }

    public function getTipas(): ?Tipas
    {
        return $this->tipas;
    }

    public function setTipas(?Tipas $tipas): self
    {
        $this->tipas = $tipas;

        return $this;
    }

    /**
     * @return Collection|Abonementas[]
     */
    public function getAbonementai(): Collection
    {
        return $this->abonementai;
    }

    public function addAbonementai(Abonementas $abonementai): self
    {
        if (!$this->abonementai->contains($abonementai)) {
            $this->abonementai[] = $abonementai;
            $abonementai->setSale($this);
        }

        return $this;
    }

    public function removeAbonementai(Abonementas $abonementai): self
    {
        if ($this->abonementai->contains($abonementai)) {
            $this->abonementai->removeElement($abonementai);
            // set the owning side to null (unless already changed)
            if ($abonementai->getSale() === $this) {
                $abonementai->setSale(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->pavadinimas;
    }

    /**
     * @return Collection|Darbuotojas[]
     */
    public function getDarbuotojai(): Collection
    {
        return $this->darbuotojai;
    }

    public function addDarbuotojai(Darbuotojas $darbuotojai): self
    {
        if (!$this->darbuotojai->contains($darbuotojai)) {
            $this->darbuotojai[] = $darbuotojai;
            $darbuotojai->setSale($this);
        }

        return $this;
    }

    public function removeDarbuotojai(Darbuotojas $darbuotojai): self
    {
        if ($this->darbuotojai->contains($darbuotojai)) {
            $this->darbuotojai->removeElement($darbuotojai);
            // set the owning side to null (unless already changed)
            if ($darbuotojai->getSale() === $this) {
                $darbuotojai->setSale(null);
            }
        }

        return $this;
    }
}
