<?php

namespace AppBundle\Entity;

/**
 * Chapa
 */
class Chapa
{
    /**
     * @var integer
     */
    private $idChapa;

    /**
     * @var string
     */
    private $nombChapa;


    /**
     * Get idChapa
     *
     * @return integer
     */
    public function getIdChapa()
    {
        return $this->idChapa;
    }

    /**
     * Set nombChapa
     *
     * @param string $nombChapa
     *
     * @return Chapa
     */
    public function setNombChapa($nombChapa)
    {
        $this->nombChapa = $nombChapa;

        return $this;
    }

    /**
     * Get nombChapa
     *
     * @return string
     */
    public function getNombChapa()
    {
        return $this->nombChapa;
    }

    public function __toString()
    {
        return(string) $this->nombChapa;
    }
}
