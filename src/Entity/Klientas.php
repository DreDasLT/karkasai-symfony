<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Klientas
 *
 * @ORM\Table(name="klientas")
 * @ORM\Entity
 */
class Klientas
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vardas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $vardas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pavarde", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $pavarde = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_nr", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $telNr = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="el_pastas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $elPastas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="miestas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $miestas = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gatve", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $gatve = 'NULL';

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonementas", mappedBy="klientas", orphanRemoval=true)
     */
    private $abonementai;

    public function __construct()
    {
        $this->abonementai = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVardas(): ?string
    {
        return $this->vardas;
    }

    public function setVardas(?string $vardas): self
    {
        $this->vardas = $vardas;

        return $this;
    }

    public function getPavarde(): ?string
    {
        return $this->pavarde;
    }

    public function setPavarde(?string $pavarde): self
    {
        $this->pavarde = $pavarde;

        return $this;
    }

    public function getTelNr(): ?string
    {
        return $this->telNr;
    }

    public function setTelNr(?string $telNr): self
    {
        $this->telNr = $telNr;

        return $this;
    }

    public function getElPastas(): ?string
    {
        return $this->elPastas;
    }

    public function setElPastas(?string $elPastas): self
    {
        $this->elPastas = $elPastas;

        return $this;
    }

    public function getMiestas(): ?string
    {
        return $this->miestas;
    }

    public function setMiestas(?string $miestas): self
    {
        $this->miestas = $miestas;

        return $this;
    }

    public function getGatve(): ?string
    {
        return $this->gatve;
    }

    public function setGatve(?string $gatve): self
    {
        $this->gatve = $gatve;

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
            $abonementai->setKlientas($this);
        }

        return $this;
    }

    public function removeAbonementai(Abonementas $abonementai): self
    {
        if ($this->abonementai->contains($abonementai)) {
            $this->abonementai->removeElement($abonementai);
            // set the owning side to null (unless already changed)
            if ($abonementai->getKlientas() === $this) {
                $abonementai->setKlientas(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return "$this->vardas $this->pavarde";
    }
}
