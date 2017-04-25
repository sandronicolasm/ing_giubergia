<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity ;

/**
 * Permisionario
 *
 * @ORM\Table(name="permisionario", uniqueConstraints={@ORM\UniqueConstraint(name="dni_permi", columns={"dni_permi"})})
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"dniPermi"},
 *     message= "No se pueden cargar dos permisionarios con el mismo DNI, verifique el número ingresado"
 * )
 */
class Permisionario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_permi", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermi;

    /**
     * @var string
     *
     * @ORM\Column(name="nomb_permi", type="string", length=100, nullable=true)
     */
    private $nombPermi;

    /**
     * @var string
     *
     * @ORM\Column(name="dire_permi", type="string", length=100, nullable=true)
     */
    private $direPermi;

    /**
     * @var string
     *
     * @ORM\Column(name="dni_permi", type="string", length=20, nullable=true)
     */
    private $dniPermi;



    /**
     * Get idPermi
     *
     * @return integer
     */
    public function getIdPermi()
    {
        return $this->idPermi;
    }

    /**
     * Set nombPermi
     *
     * @param string $nombPermi
     *
     * @return Permisionario
     */
    public function setNombPermi($nombPermi)
    {
        $this->nombPermi = $nombPermi;

        return $this;
    }

    /**
     * Get nombPermi
     *
     * @return string
     */
    public function getNombPermi()
    {
        return $this->nombPermi;
    }

    /**
     * Set direPermi
     *
     * @param string $direPermi
     *
     * @return Permisionario
     */
    public function setDirePermi($direPermi)
    {
        $this->direPermi = $direPermi;

        return $this;
    }

    /**
     * Get direPermi
     *
     * @return string
     */
    public function getDirePermi()
    {
        return $this->direPermi;
    }

    /**
     * Set dniPermi
     *
     * @param string $dniPermi
     *
     * @return Permisionario
     */
    public function setDniPermi($dniPermi)
    {
        $this->dniPermi = $dniPermi;

        return $this;
    }

    /**
     * Get dniPermi
     *
     * @return string
     */
    public function getDniPermi()
    {
        return $this->dniPermi;
    }

    public function __toString()
    {
        return(string) $this->nombPermi;
    }
}
