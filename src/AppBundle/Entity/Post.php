<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppBundle\Entity\Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * The ordered product
     * @var Autor
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="autor", referencedColumnName="id")
     * */
    private $autor;

    /**
     * @ORM\Column(name="cadencia", type="integer")
     */
    private $cadencia;

    /**
     * @ORM\Column(name="fechaEntrega", type="date")
     */
    private $fechaEntrega;

    /**
     * @ORM\Column(name="titulo", type="string", nullable=true)
     */
    private $titulo;

    /**
     * @ORM\Column(name="acabado", type="boolean")
     */
    private $acabado;




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
     * Set cadencia
     *
     * @param integer $cadencia
     * @return Post
     */
    public function setCadencia($cadencia)
    {
        $this->cadencia = $cadencia;

        return $this;
    }

    /**
     * Get cadencia
     *
     * @return integer 
     */
    public function getCadencia()
    {
        return $this->cadencia;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Post
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Post
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set acabado
     *
     * @param boolean $acabado
     * @return Post
     */
    public function setAcabado($acabado)
    {
        $this->acabado = $acabado;

        return $this;
    }

    /**
     * Get acabado
     *
     * @return boolean 
     */
    public function getAcabado()
    {
        return $this->acabado;
    }

    /**
     * Set autor
     *
     * @param \AppBundle\Entity\User $autor
     * @return Post
     */
    public function setAutor(\AppBundle\Entity\User $autor = null)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return \AppBundle\Entity\User 
     */
    public function getAutor()
    {
        return $this->autor;
    }
}
