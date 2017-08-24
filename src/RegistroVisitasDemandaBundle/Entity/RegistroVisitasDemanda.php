<?php

namespace RegistroVisitasDemandaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroVisitasDemanda
 *
 * @ORM\Table(name="registro_visitas_demanda")
 * @ORM\Entity(repositoryClass="RegistroVisitasDemandaBundle\Repository\RegistroVisitasDemandaRepository")
 */
class RegistroVisitasDemanda
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
     * @ORM\JoinTable(name="registrovisitasdemanda_visitasdia",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasdemanda_id", referencedColumnName="id", onDelete="CASCADE")
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
     * @ORM\JoinTable(name="registrovisitasdemanda_visitasmes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasdemanda_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasmes_id", referencedColumnName="id", unique=true, nullable=false)
     *   }
     * )
     */
    private $vistasMes;

    /**
     * @var \DemandaBundle\Entity\Demanda
     *
     * @ORM\OneToOne(targetEntity="DemandaBundle\Entity\Demanda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="demanda_id", referencedColumnName="id", unique=true)
     * })
     */
    private $demanda;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasAnioBundle\Entity\VisitasAnio")
     * @ORM\JoinTable(name="registrovisitasdemanda_visitasanio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasdemanda_id", referencedColumnName="id", onDelete="CASCADE")
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
     * @return registrovisitasdemanda
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
     * @return registrovisitasdemanda
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
     * Set demanda
     *
     * @param \UserBundle\Entity\User $demanda
     *
     * @return registrovisitasdemanda
     */
    public function setDemanda(\DemandaBundle\Entity\Demanda $demanda = null)
    {
        $this->demanda = $demanda;

        return $this;
    }

    /**
     * Get demanda
     *
     * @return \UserBundle\Entity\User
     */
    public function getDemanda()
    {
        return $this->demanda;
    }

    /**
     * Add visitasAnio
     *
     * @param \VisitasAnioBundle\Entity\VisitasAnio $visitasAnio
     *
     * @return registrovisitasdemanda
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
