<?php

namespace PalabrasClaveOfertaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PalabrasClaveOferta
 *
 * @ORM\Table(name="PalabrasClaveOferta")
 * @ORM\Entity
 */
class PalabrasClaveOferta
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
     * @var string
     *
     * @ORM\Column(name="palabrasClave", type="text", nullable=false, unique=false)
     */
    private $palabrasClave;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set palabrasClave
     *
     * @param string $palabrasClave
     *
     * @return PalabrasClaveOferta
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
     * Set usuario
     *
     * @param \UserBundle\Entity\User $usuario
     *
     * @return PalabrasClaveOferta
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
}

