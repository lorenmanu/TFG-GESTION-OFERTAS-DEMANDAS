<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 * @UniqueEntity(fields="username", message="El nombre de usuario ya existe.")
 * @UniqueEntity(fields="email", message="El email ya existe.")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasDiaBundle\Entity\VisitasDia")
     * @ORM\JoinTable(name="user_visitasdia",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasdia_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $visitasDia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasMesBundle\Entity\VisitasMes")
     * @ORM\JoinTable(name="user_visitasmes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasmes_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $visitasMes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VisitasAnioBundle\Entity\VisitasAnio")
     * @ORM\JoinTable(name="user_visitasanio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="visitasanio_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $visitasAnio;


    public function __construct()
    {
        $this->visitasDia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->visitasMes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->visitasAnio = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
        // your own logic
    }

    public function getName(){
        return $this->username;
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
     * @return User
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
     * Add visitasMe
     *
     * @param \VisitasMesBundle\Entity\VisitasMes $visitasMe
     *
     * @return User
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

    /**
     * Add visitasAnio
     *
     * @param \VisitasAnioBundle\Entity\VisitasAnio $visitasAnio
     *
     * @return User
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
