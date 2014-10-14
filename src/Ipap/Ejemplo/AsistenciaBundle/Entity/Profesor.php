<?php

namespace Ipap\Ejemplo\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Entity
 */
class Profesor extends Persona
{

    /**
     * @var string
     *
     * @ORM\Column(name="especialidad", type="string", length=255)
     */
    private $especialidad;

    /**
     * Set especialidad
     *
     * @param string $especialidad
     * @return Profesor
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }
}
