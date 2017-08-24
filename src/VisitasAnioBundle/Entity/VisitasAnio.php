<?php

namespace VisitasAnioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VisitasAnio
 *
 * @ORM\Table(name="VisitasAnio")
 * @ORM\Entity
 */
class VisitasAnio
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
     * @ORM\Column(name="anio", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="visitas", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $visitas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="VisitasMesBundle\Entity\VisitasMes", mappedBy="visitasAnio")
     */
    private $visitasMes;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->visitasMes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set anio
     *
     * @param integer $anio
     *
     * @return VisitasAnio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     *
     * @return VisitasAnio
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
     * Add visitasMe
     *
     * @param \VisitasMesBundle\Entity\VisitasMes $visitasMe
     *
     * @return VisitasAnio
     */
    public function addVisitasMe(\VisitasMesBundle\Entity\VisitasMes $visitasMe)
    {
        $this->visitasMes[] = $visitasMe;

        return $this;
    }

    /**
     * Remove visitasMe
     *
     * @param \VisitasMesBundle\Entity\VisitasMes $visitasMe
     */
    public function removeVisitasMe(\VisitasMesBundle\Entity\VisitasMes $visitasMe)
    {
        $this->visitasMes->removeElement($visitasMe);
    }

    /**
     * Get visitasMes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitasMes()
    {
        return $this->visitasMes;
    }


}
