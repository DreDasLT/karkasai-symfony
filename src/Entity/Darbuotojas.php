<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\SportoSale;

/**
 * Darbuotojas
 *
 * @ORM\Table(name="darbuotojas", indexes={@ORM\Index(name="dirba", columns={"fk_SPORTO_SALEid_SPORTO_SALE"})})
 * @ORM\Entity
 */
class Darbuotojas
{
    /**
     * @var int
     *
     * @ORM\Column(name="tab_nr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tabNr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asmens_kodas", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $asmensKodas = 'NULL';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="isidarbinimo_data", type="date", nullable=true, options={"default"="NULL"})
     */
    private $isidarbinimoData = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="nebedirbo_nuo", type="date", nullable=true, options={"default"="NULL"})
     */
    private $nebedirboNuo = 'NULL';

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
     * @var \SportoSale
     *
     * @ORM\ManyToOne(targetEntity="SportoSale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_SPORTO_SALEid_SPORTO_SALE", referencedColumnName="id_SPORTO_SALE")
     * })
     */
    private $fkSportoSaleidSportoSale;

    public function getTabNr(): ?int
    {
        return $this->tabNr;
    }

    public function getAsmensKodas(): ?string
    {
        return $this->asmensKodas;
    }

    public function setAsmensKodas(?string $asmensKodas): self
    {
        $this->asmensKodas = $asmensKodas;

        return $this;
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

    public function getIsidarbinimoData(): ?\DateTimeInterface
    {
        return $this->isidarbinimoData;
    }

    public function setIsidarbinimoData(?\DateTimeInterface $isidarbinimoData): self
    {
        $this->isidarbinimoData = $isidarbinimoData;

        return $this;
    }

    public function getNebedirboNuo(): ?\DateTimeInterface
    {
        return $this->nebedirboNuo;
    }

    public function setNebedirboNuo(?\DateTimeInterface $nebedirboNuo): self
    {
        $this->nebedirboNuo = $nebedirboNuo;

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

    public function getFkSportoSaleidSportoSale(): ?SportoSale
    {
        return $this->fkSportoSaleidSportoSale;
    }

    public function setFkSportoSaleidSportoSale(?SportoSale $fkSportoSaleidSportoSale): self
    {
        $this->fkSportoSaleidSportoSale = $fkSportoSaleidSportoSale;

        return $this;
    }


}
