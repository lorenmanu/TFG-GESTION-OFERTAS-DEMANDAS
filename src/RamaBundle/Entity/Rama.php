<?php

namespace RamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rama
 *
 * @ORM\Table(name="rama")
 * @ORM\Entity
 */
class Rama
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
     * @ORM\Column(name="nombre", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DisciplinaBundle\Entity\Disciplina", inversedBy="ramas")
     * @ORM\JoinTable(name="rama_disciplina",
     *   joinColumns={
     *     @ORM\JoinColumn(name="rama_id", referencedColumnName="id", onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="disciplina_id", referencedColumnName="id", onDelete="CASCADE")
     *   }
     * )
     */
    private $disciplinas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AreaBundle\Entity\Area", mappedBy="ramas")
     */
    private $areas;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->disciplinas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->areas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Rama
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

    public function __toString(){
      return $this->getNombre();
    }

    /**
     * Add disciplina
     *
     * @param \DisciplinaBundle\Entity\Disciplina $disciplina
     *
     * @return Rama
     */
    public function addDisciplina(\DisciplinaBundle\Entity\Disciplina $disciplina)
    {
        $this->disciplinas->add($disciplina);

        return $this;
    }

    /**
     * Remove disciplina
     *
     * @param \DisciplinaBundle\Entity\Disciplina $disciplina
     */
    public function removeDisciplina(\DisciplinaBundle\Entity\Disciplina $disciplina)
    {
        $this->disciplinas->removeElement($disciplina);
    }

    /**
     * Get disciplinas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDisciplinas()
    {
        return $this->disciplinas;
    }

    /**
     * Add area
     *
     * @param \AreaBundle\Entity\Area $area
     *
     * @return Rama
     */
    public function addArea(\AreaBundle\Entity\Area $area)
    {
        $this->areas[] = $area;

        return $this;
    }

    /**
     * Remove area
     *
     * @param \AreaBundle\Entity\Area $area
     */
    public function removeArea(\AreaBundle\Entity\Area $area)
    {
        $this->areas->removeElement($area);
    }

    /**
     * Get areas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAreas()
    {
        return $this->areas;
    }

}
