<?php

namespace VisitasDiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VisitasDia
 *
 * @ORM\Table(name="VisitasDia")
 * @ORM\Entity
 */
class VisitasDia
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
     * @ORM\Column(name="dia", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dia;

    /**
     * @var integer
     *
     * @ORM\Column(name="visitas", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $visitas;

    /**
     * @var \VisitasMesBundle\Entity\VisitasMes
     *
     * @ORM\ManyToOne(targetEntity="VisitasMesBundle\Entity\VisitasMes", inversedBy="visitasDias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitasMes_id", referencedColumnName="id")
     * })
     */
    private $visitasMes;


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
     * Set dia
     *
     * @param integer $dia
     *
     * @return VisitasDia
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     *
     * @return VisitasDia
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
     * Set visitasMes
     *
     * @param \VisitasMesBundle\Entity\VisitasMes $visitasMes
     *
     * @return VisitasDia
     */
    public function setVisitasMes(\VisitasMesBundle\Entity\VisitasMes $visitasMes = null)
    {
        $this->visitasMes = $visitasMes;

        return $this;
    }

    /**
     * Get visitasMes
     *
     * @return \VisitasMesBundle\Entity\VisitasMes
     */
    public function getVisitasMes()
    {
        return $this->visitasMes;
    }
}
