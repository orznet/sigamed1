<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Table(name="actividad_plang")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\actividadplanglRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Actividadplang{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;

/**
 * @ORM\Column(type="float", scale=1, nullable=true)
 */
protected $horas;
 
/**
* @ORM\Column(type="string", length=2500)
*/
protected $descripcion; 
 
/**
* @ORM\Column(type="string", length=2500)
*/
protected $observaciones;

/**
 * @ORM\Column(type="float", scale=1, nullable=true)
 */
protected $autoevaluacion;

/** 
* @var Plang
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Plangestion", inversedBy="actividades")
* @ORM\JoinColumn(name="plan_id", referencedColumnName="id", nullable=false)
*/
protected $plang;


/** 
* @var Actividad
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Actividadrol")
* @ORM\JoinColumn(name="actividad_id", referencedColumnName="id", nullable=false)
*/
protected $actividad;

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
     * Set horas
     *
     * @param float $horas
     * @return Actividadplang
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return float 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Actividadplang
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Actividadplang
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
     * @return Actividadplang
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
     * Set plang
     *
     * @param \Admin\MedBundle\Entity\Plangestion $plang
     * @return Actividadplang
     */
    public function setPlang(\Admin\MedBundle\Entity\Plangestion $plang)
    {
        $this->plang = $plang;

        return $this;
    }

    /**
     * Get plang
     *
     * @return \Admin\MedBundle\Entity\Plangestion 
     */
    public function getPlang()
    {
        return $this->plang;
    }

    /**
     * Set actividad
     *
     * @param \Admin\MedBundle\Entity\Actividadrol $actividad
     * @return Actividadplang
     */
    public function setActividad(\Admin\MedBundle\Entity\Actividadrol $actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return \Admin\MedBundle\Entity\Actividadrol 
     */
    public function getActividad()
    {
        return $this->actividad;
    }
}
