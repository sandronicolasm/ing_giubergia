<?php

namespace AppBundle\Entity;

/**
 * Marca
 */
class Marca
{
    /**
     * @var integer
     */
    private $idMarca;

    /**
     * @var string
     */
    private $nombMarca;


    /**
     * Get idMarca
     *
     * @return integer
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set nombMarca
     *
     * @param string $nombMarca
     *
     * @return Marca
     */
    public function setNombMarca($nombMarca)
    {
        $this->nombMarca = $nombMarca;

        return $this;
    }

    /**
     * Get nombMarca
     *
     * @return string
     */
    public function getNombMarca()
    {
        return $this->nombMarca;
    }

    public function __toString()
    {
        return(string) $this->nombMarca;
    }
}
