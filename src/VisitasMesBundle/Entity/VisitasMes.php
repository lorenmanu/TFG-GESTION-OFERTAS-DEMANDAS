<?php

namespace VisitasMesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VisitasMes
 *
 * @ORM\Table(name="VisitasMes")
 * @ORM\Entity
 */
class VisitasMes
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
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="visitas", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $visitas;

    /**
     * @var \VisitasAnioBundle\Entity\VisitasAnio
     *
     * @ORM\ManyToOne(targetEntity="VisitasAnioBundle\Entity\VisitasAnio", inversedBy="visitasMes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitasAnio_id", referencedColumnName="id")
     * })
     */
    private $visitasAnio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="VisitasDiaBundle\Entity\VisitasDia", mappedBy="visitasMes")
     */
    private $visitasDia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->visitasDia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set mes
     *
     * @param integer $mes
     *
     * @return VisitasMes
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     *
     * @return VisitasMes
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas
     *
     * @return integer
     */
    public function getVisitas()
    {
        return $this->visitas;
    }

    /**
     * Set visitasAnio
     *
     * @param \VisitasAnioBundle\Entity\VisitasAnio $visitasAnio
     *
     * @return VisitasMes
     */
    public function setVisitasAnio(\VisitasAnioBundle\Entity\VisitasAnio $visitasAnio = null)
    {
        $this->visitasAnio = $visitasAnio;

        return $this;
    }

    /**
     * Get visitasAnio
     *
     * @return \VisitasAnioBundle\Entity\VisitasAnio
     */
    public function getVisitasAnio()
    {
        return $this->visitasAnio;
    }

    /**
     * Add visitasDium
     *
     * @param \VisitasDiaBundle\Entity\VisitasDia $visitasDium
     *
     * @return VisitasMes
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
}
