<?php

namespace ComentarioBundle\Entity;

/**
 * Comentario
 */
class Comentario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $contenido;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return Comentario
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Comentario
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Comentario
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }
}
