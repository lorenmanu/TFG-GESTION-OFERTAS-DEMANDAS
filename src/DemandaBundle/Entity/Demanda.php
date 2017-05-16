<?php

namespace DemandaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demanda
 *
 * @ORM\Table(name="demanda")
 * @ORM\Entity(repositoryClass="")
 */
class Demanda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="condiciones", type="text")
     */
    private $condiciones;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta_foto", type="string", length=255, unique=true)
     */
    private $rutaFoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime")
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=255)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="conocimiento", type="string", length=255)
     */
    private $conocimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="palabras_clave", type="string", length=255)
     */
    private $palabrasClave;

    /**
     * @ORM\ManyToOne(targetEntity="OfertaBundle\Entity\Oferta")
     */
    private $oferta;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Demanda
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Demanda
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Demanda
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set condiciones
     *
     * @param string $condiciones
     * @return Demanda
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return string
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set rutaFoto
     *
     * @param string $rutaFoto
     * @return Demanda
     */
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;

        return $this;
    }

    /**
     * Get rutaFoto
     *
     * @return string
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Demanda
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Demanda
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Demanda
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set conocimiento
     *
     * @param string $conocimiento
     * @return Demanda
     */
    public function setConocimiento($conocimiento)
    {
        $this->conocimiento = $conocimiento;

        return $this;
    }

    /**
     * Get conocimiento
     *
     * @return string
     */
    public function getConocimiento()
    {
        return $this->conocimiento;
    }

    /**
     * Set palabrasClave
     *
     * @param string $palabrasClave
     * @return Demanda
     */
    public function setPalabrasClave($palabrasClave)
    {
        $this->palabrasClave = $palabrasClave;

        return $this;
    }

    /**
     * Get palabrasClave
     *
     * @return string
     */
    public function getPalabrasClave()
    {
        return $this->palabrasClave;
    }

    /**
     * Set visitasDemanda
     *
     * @param integer $visitasDemanda
     * @return Demanda
     */
    public function setVisitasDemanda($visitasDemanda)
    {
        $this->visitasDemanda = $visitasDemanda;

        return $this;
    }

    /**
     * Get visitasDemanda
     *
     * @return integer
     */
    public function getVisitasDemanda()
    {
        return $this->visitasDemanda;
    }

    /**
     * Set oferta
     *
     * @param \OfertaBundle\Entity\Oferta $oferta
     * @return Demanda
     */
    public function setOferta(\OfertaBundle\Entity\Oferta $oferta = null)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return \OfertaBundle\Entity\Oferta
     */
    public function getOferta()
    {
        return $this->oferta;
    }
}
