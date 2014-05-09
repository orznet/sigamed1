<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="acciones_planm")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\AccionespmRepository")
 */
class Accionespm{
    
 /**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
     */
 protected $id;  

 
 /**
     * @ORM\Column(type="string", length=512)
     */
protected $oportunidad;

 /**
     * @ORM\Column(type="string", length=512)
     */
protected $causas; 


 /**
     * @ORM\Column(type="string", length=512)
     */
protected $accion;

/**
  * @ORM\Column(type="date")
  */
protected $fecha_proyectada;
 
 /**
     * @ORM\Column(type="string", length=512, nullable=true)
     */
protected $observaciones;

/**
  * @ORM\Column(type="datetime", nullable=true)
  */
protected $fecha_cierre;


/** 
     * @var Plan
     * @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Planmejoramiento", inversedBy="acciones")
     * @ORM\JoinColumn(name="plan_id", referencedColumnName="id",
     * nullable=false,
     * onDelete="CASCADE"
     * )
     */
protected $plan;


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
     * Set oportunidad
     *
     * @param string $oportunidad
     * @return Accionespm
     */
    public function setOportunidad($oportunidad)
    {
        $this->oportunidad = $oportunidad;

        return $this;
    }

    /**
     * Get oportunidad
     *
     * @return string 
     */
    public function getOportunidad()
    {
        return $this->oportunidad;
    }

    /**
     * Set causas
     *
     * @param string $causas
     * @return Accionespm
     */
    public function setCausas($causas)
    {
        $this->causas = $causas;

        return $this;
    }

    /**
     * Get causas
     *
     * @return string 
     */
    public function getCausas()
    {
        return $this->causas;
    }

    /**
     * Set accion
     *
     * @param string $accion
     * @return Accionespm
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set fecha_proyectada
     *
     * @param \DateTime $fechaProyectada
     * @return Accionespm
     */
    public function setFechaProyectada($fechaProyectada)
    {
        $this->fecha_proyectada = $fechaProyectada;

        return $this;
    }

    /**
     * Get fecha_proyectada
     *
     * @return \DateTime 
     */
    public function getFechaProyectada()
    {
        return $this->fecha_proyectada;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Accionespm
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
     * Set fecha_cierre
     *
     * @param \DateTime $fechaCierre
     * @return Accionespm
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
     * Set plan
     *
     * @param \Admin\UnadBundle\Entity\Planmejoramiento $plan
     * @return Accionespm
     */
    public function setPlan(\Admin\MedBundle\Entity\Planmejoramiento $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return \Admin\MedBundle\Entity\Planmejoramiento 
     */
    public function getPlan()
    {
        return $this->plan;
    }
}
