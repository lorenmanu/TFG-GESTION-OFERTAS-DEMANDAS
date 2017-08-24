<?php

namespace RegistroVisitasOfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroVisitasoferta
 *
 * @ORM\Table(name="RegistroVisitasOferta")
 * @ORM\Entity
 */
class RegistroVisitasOferta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasDiaBundle\Entity\VisitasDia")
     * @ORM\JoinTable(name="registrovisitasoferta_visitasdia",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasoferta_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasdia_id", referencedColumnName="id", unique=true, nullable=false)
     *   }
     * )
     */
    private $visitasDia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasMesBundle\Entity\VisitasMes")
     * @ORM\JoinTable(name="registrovisitasoferta_visitasmes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasoferta_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasmes_id", referencedColumnName="id", unique=true, nullable=false)
     *   }
     * )
     */
    private $vistasMes;

    /**
     * @var \OfertaBundle\Entity\Oferta
     *
     * @ORM\OneToOne(targetEntity="OfertaBundle\Entity\Oferta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oferta_id", referencedColumnName="id", unique=true)
     * })
     */
    private $oferta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasAnioBundle\Entity\VisitasAnio")
     * @ORM\JoinTable(name="registrovisitasoferta_visitasanio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasoferta_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasanio_id", referencedColumnName="id", unique=true, nullable=false)
     *   }
     * )
     */
    private $visitasAnio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->visitasDia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->vistasMes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->visitasAnio = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add visitasDium
     *
     * @param \VisitasDiaBundle\Entity\VisitasDia $visitasDium
     *
     * @return RegistroVisitasoferta
     */
    public function addVisitasDium(\VisitasDiaBundle\Entity\VisitasDia $visitasDium)
    {
        $this->visitasDia[] = $visitasDium;

        return $this;
    }

    /**
     * Remove visitasDium
     *
     * @param \VisitasDiaBundle\Entity\VisitasDia $visitasDium
     */
    public function removeVisitasDium(\VisitasDiaBundle\Entity\VisitasDia $visitasDium)
    {
        $this->visitasDia->removeElement($visitasDium);
    }

    /**
     * Get visitasDia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitasDia()
    {
        return $this->visitasDia;
    }

    /**
     * Add vistasMe
     *
     * @param \VisitasMesBundle\Entity\VisitasMes $vistasMe
     *
     * @return RegistroVisitasoferta
     */
    public function addVisitasMe(\VisitasMesBundle\Entity\VisitasMes $vistasMe)
    {
        $this->vistasMes[] = $vistasMe;

        return $this;
    }

    /**
     * Remove vistasMe
     *
     * @param \VisitasMesBundle\Entity\VisitasMes $vistasMe
     */
    public function removeVisitasMe(\VisitasMesBundle\Entity\VisitasMes $vistasMe)
    {
        $this->vistasMes->removeElement($vistasMe);
    }

    /**
     * Get vistasMes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitasMes()
    {
        return $this->vistasMes;
    }

    /**
     * Set oferta
     *
     * @param \UserBundle\Entity\User $oferta
     *
     * @return RegistroVisitasoferta
     */
    public function setOferta(\OfertaBundle\Entity\Oferta $oferta = null)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return \UserBundle\Entity\User
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Add visitasAnio
     *
     * @param \VisitasAnioBundle\Entity\VisitasAnio $visitasAnio
     *
     * @return RegistroVisitasoferta
     */
    public function addVisitasAnio(\VisitasAnioBundle\Entity\VisitasAnio $visitasAnio)
    {
        $this->visitasAnio[] = $visitasAnio;

        return $this;
    }

    /**
     * Remove visitasAnio
     *
     * @param \VisitasAnioBundle\Entity\VisitasAnio $visitasAnio
     */
    public function removeVisitasAnio(\VisitasAnioBundle\Entity\VisitasAnio $visitasAnio)
    {
        $this->visitasAnio->removeElement($visitasAnio);
    }

    /**
     * Get visitasAnio
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitasAnio()
    {
        return $this->visitasAnio;
    }
}

