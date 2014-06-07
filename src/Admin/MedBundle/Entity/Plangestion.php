<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="plan_gestion")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\PlangestionRepository")
 */
class Plangestion{


/**
 * @ORM\Id
 * @ORM\OneToOne(targetEntity="Admin\UnadBundle\Entity\Docente", inversedBy="plangestion")
 * @ORM\JoinColumn(name="id",referencedColumnName="id") 
     */
 protected $id;  
 
 /**
  * @ORM\Column(type="datetime", nullable=true)
  */
protected $fecha_creacion;

 /**
  * @ORM\Column(type="datetime", nullable=true)
  */
protected $fecha_cierre;

 /**
  * @ORM\Column(type="datetime", nullable=true)
  */
protected $fecha_autoevaluacion;

 /**
  * @ORM\Column(type="string", length=512, nullable=true)
  */
protected $observaciones;

/**
  * @ORM\Column(type="float", scale=2, nullable=true)
  */
protected $autoevaluacion;

/**
  * @ORM\Column(type="smallint", nullable=false)
  */
protected $estado;


/**
 * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\Actividadplang", mappedBy="plang")
 */
protected $actividades;



/**
 * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\Avalplang", mappedBy="plan")
 */
protected $avales;

    /**
     * Set fecha_creacion
     *
     * @param \DateTime $fechaCreacion
     * @return Plangestion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fecha_creacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fecha_creacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set fecha_cierre
     *
     * @param \DateTime $fechaCierre
     * @return Plangestion
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fecha_cierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fecha_cierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fecha_cierre;
    }

    /**
     * Set fecha_autoevaluacion
     *
     * @param \DateTime $fechaAutoevaluacion
     * @return Plangestion
     */
    public function setFechaAutoevaluacion($fechaAutoevaluacion)
    {
        $this->fecha_autoevaluacion = $fechaAutoevaluacion;

        return $this;
    }

    /**
     * Get fecha_autoevaluacion
     *
     * @return \DateTime 
     */
    public function getFechaAutoevaluacion()
    {
        return $this->fecha_autoevaluacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Plangestion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set autoevaluacion
     *
     * @param float $autoevaluacion
     * @return Plangestion
     */
    public function setAutoevaluacion($autoevaluacion)
    {
        $this->autoevaluacion = $autoevaluacion;

        return $this;
    }

    /**
     * Get autoevaluacion
     *
     * @return float 
     */
    public function getAutoevaluacion()
    {
        return $this->autoevaluacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Plangestion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set id
     *
     * @param \Admin\UnadBundle\Entity\Docente $id
     * @return Plangestion
     */
    public function setId(\Admin\UnadBundle\Entity\Docente $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \Admin\UnadBundle\Entity\Docente 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividades = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add actividades
     *
     * @param \Admin\MedBundle\Entity\Actividadplang $actividades
     * @return Plangestion
     */
    public function addActividade(\Admin\MedBundle\Entity\Actividadplang $actividades)
    {
        $this->actividades[] = $actividades;

        return $this;
    }

    /**
     * Remove actividades
     *
     * @param \Admin\MedBundle\Entity\Actividadplang $actividades
     */
    public function removeActividade(\Admin\MedBundle\Entity\Actividadplang $actividades)
    {
        $this->actividades->removeElement($actividades);
    }

    /**
     * Get actividades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividades()
    {
        return $this->actividades;
    }

    /**
     * Add avales
     *
     * @param \Admin\MedBundle\Entity\Avalplang $avales
     * @return Plangestion
     */
    public function addAvale(\Admin\MedBundle\Entity\Avalplang $avales)
    {
        $this->avales[] = $avales;

        return $this;
    }

    /**
     * Remove avales
     *
     * @param \Admin\MedBundle\Entity\Avalplang $avales
     */
    public function removeAvale(\Admin\MedBundle\Entity\Avalplang $avales)
    {
        $this->avales->removeElement($avales);
    }

    /**
     * Get avales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAvales()
    {
        return $this->avales;
    }
}
