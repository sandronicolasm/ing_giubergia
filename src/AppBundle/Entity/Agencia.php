<?php

namespace AppBundle\Entity;

/**
 * Agencia
 */
class Agencia
{
    /**
     * @var integer
     */
    private $idAgen;

    /**
     * @var string
     */
    private $nombAgen;


    /**
     * Get idAgen
     *
     * @return integer
     */
    public function getIdAgen()
    {
        return $this->idAgen;
    }

    /**
     * Set nombAgen
     *
     * @param string $nombAgen
     *
     * @return Agencia
     */
    public function setNombAgen($nombAgen)
    {
        $this->nombAgen = $nombAgen;

        return $this;
    }

    /**
     * Get nombAgen
     *
     * @return string
     */
    public function getNombAgen()
    {
        return $this->nombAgen;
    }

    public function __toString()
    {
        return(string) $this->nombAgen;
    }
}
