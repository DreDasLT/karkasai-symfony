<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SportoSale
 *
 * @ORM\Table(name="sporto_sale", indexes={@ORM\Index(name="tipas", columns={"tipas"})})
 * @ORM\Entity
 */
class SportoSale
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="pavadinimas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $pavadinimas = 'NULL';

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
     * @var int|null
     *
     * @ORM\Column(name="namo_nr", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $namoNr = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dirba_nuo", type="time", nullable=true, options={"default"="NULL"})
     */
    private $dirbaNuo = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dirba_iki", type="time", nullable=true, options={"default"="NULL"})
     */
    private $dirbaIki = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="id_SPORTO_SALE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSportoSale;

    /**
     * @var \SaliuTipai
     *
     * @ORM\ManyToOne(targetEntity="SaliuTipai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipas", referencedColumnName="id_SALIU_TIPAI")
     * })
     */
    private $tipas;

    public function getPavadinimas(): ?string
    {
        return $this->pavadinimas;
    }

    public function setPavadinimas(?string $pavadinimas): self
    {
        $this->pavadinimas = $pavadinimas;

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

    public function getNamoNr(): ?int
    {
        return $this->namoNr;
    }

    public function setNamoNr(?int $namoNr): self
    {
        $this->namoNr = $namoNr;

        return $this;
    }

    public function getDirbaNuo(): ?\DateTimeInterface
    {
        return $this->dirbaNuo;
    }

    public function setDirbaNuo(?\DateTimeInterface $dirbaNuo): self
    {
        $this->dirbaNuo = $dirbaNuo;

        return $this;
    }

    public function getDirbaIki(): ?\DateTimeInterface
    {
        return $this->dirbaIki;
    }

    public function setDirbaIki(?\DateTimeInterface $dirbaIki): self
    {
        $this->dirbaIki = $dirbaIki;

        return $this;
    }

    public function getIdSportoSale(): ?int
    {
        return $this->idSportoSale;
    }

    public function getTipas(): ?SaliuTipai
    {
        return $this->tipas;
    }

    public function setTipas(?SaliuTipai $tipas): self
    {
        $this->tipas = $tipas;

        return $this;
    }


}
