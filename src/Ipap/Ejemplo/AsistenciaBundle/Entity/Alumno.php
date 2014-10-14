<?php

namespace Ipap\Ejemplo\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Entity
 */
class Alumno extends Persona
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Inscripcion",mappedBy="alumno", cascade={"persist"})
     */
    private $inscripciones;

    /**
     * To String function
     *
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getNombre() . ' ' . $this->getApellido();
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Alumno
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
