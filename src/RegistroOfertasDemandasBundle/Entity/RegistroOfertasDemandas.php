<?php

namespace RegistroOfertasDemandasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroOfertasDemandas
 *
 * @ORM\Table(name="RegistroOfertasDemandas")
 * @ORM\Entity
 */
class RegistroOfertasDemandas
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
     * @ORM\Column(name="ofertasResueltas", type="integer", nullable=false, unique=false)
     */
    private $ofertasResueltas;

    /**
     * @var integer
     *
     * @ORM\Column(name="demandasResueltas", type="integer", nullable=false, unique=false)
     */
    private $demandasResueltas;

    /**
     * @var integer
     *
     * @ORM\Column(name="ofertasNoResueltas", type="integer", nullable=false, unique=false)
     */
    private $ofertasNoResueltas;

    /**
     * @var integer
     *
     * @ORM\Column(name="demandasNoResueltas", type="integer", nullable=false, unique=false)
     */
    private $demandasNoResueltas;


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
     * Set ofertasResueltas
     *
     * @param integer $ofertasResueltas
     *
     * @return RegistroOfertasDemandas
     */
    public function setOfertasResueltas($ofertasResueltas)
    {
        $this->ofertasResueltas = $ofertasResueltas;

        return $this;
    }

    /**
     * Get ofertasResueltas
     *
     * @return integer
     */
    public function getOfertasResueltas()
    {
        return $this->ofertasResueltas;
    }

    /**
     * Set demandasResueltas
     *
     * @param integer $demandasResueltas
     *
     * @return RegistroOfertasDemandas
     */
    public function setDemandasResueltas($demandasResueltas)
    {
        $this->demandasResueltas = $demandasResueltas;

        return $this;
    }

    /**
     * Get demandasResueltas
     *
     * @return integer
     */
    public function getDemandasResueltas()
    {
        return $this->demandasResueltas;
    }

    /**
     * Set ofertasNoResueltas
     *
     * @param integer $ofertasNoResueltas
     *
     * @return RegistroOfertasDemandas
     */
    public function setOfertasNoResueltas($ofertasNoResueltas)
    {
        $this->ofertasNoResueltas = $ofertasNoResueltas;

        return $this;
    }

    /**
     * Get ofertasNoResueltas
     *
     * @return integer
     */
    public function getOfertasNoResueltas()
    {
        return $this->ofertasNoResueltas;
    }

    /**
     * Set demandasNoResueltas
     *
     * @param integer $demandasNoResueltas
     *
     * @return RegistroOfertasDemandas
     */
    public function setDemandasNoResueltas($demandasNoResueltas)
    {
        $this->demandasNoResueltas = $demandasNoResueltas;

        return $this;
    }

    /**
     * Get demandasNoResueltas
     *
     * @return integer
     */
    public function getDemandasNoResueltas()
    {
        return $this->demandasNoResueltas;
    }
}

