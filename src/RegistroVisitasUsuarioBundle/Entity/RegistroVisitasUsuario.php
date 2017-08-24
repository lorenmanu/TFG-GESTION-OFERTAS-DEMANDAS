<?php

namespace RegistroVisitasUsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroVisitasUsuario
 *
 * @ORM\Table(name="RegistroVisitasUsuario")
 * @ORM\Entity
 */
class RegistroVisitasUsuario
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
     * @ORM\JoinTable(name="registrovisitasusuario_visitasdia",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasusuario_id", referencedColumnName="id", onDelete="CASCADE")
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
     * @ORM\JoinTable(name="registrovisitasusuario_visitasmes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasusuario_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasmes_id", referencedColumnName="id", unique=true, nullable=false)
     *   }
     * )
     */
    private $vistasMes;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id", unique=true)
     * })
     */
    private $usuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasAnioBundle\Entity\VisitasAnio")
     * @ORM\JoinTable(name="registrovisitasusuario_visitasanio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="registrovisitasusuario_id", referencedColumnName="id", onDelete="CASCADE")
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
     * @return RegistroVisitasUsuario
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
     * @return RegistroVisitasUsuario
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
     * Set usuario
     *
     * @param \UserBundle\Entity\User $usuario
     *
     * @return RegistroVisitasUsuario
     */
    public function setUsuario(\UserBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \UserBundle\Entity\User
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add visitasAnio
     *
     * @param \VisitasAnioBundle\Entity\VisitasAnio $visitasAnio
     *
     * @return RegistroVisitasUsuario
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

