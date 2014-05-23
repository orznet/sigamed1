<?php
namespace Admin\UnadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="docente")
 * @ORM\Entity(repositoryClass="Admin\UnadBundle\Entity\DocenteRepository")
 */
class Docente{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="NONE")
     */
 protected $id;  
 
 /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
protected $modalidad;

 /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
protected $vinculacion;

 /**
     * @ORM\Column(type="string", length=50)
     */
protected $cargo;

 /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
protected $resolucion;
 
 /**
     * @ORM\Column(type="string", length=15)
     */
protected $perfil;


/** 
     * @var User
     * @ORM\ManyToOne(targetEntity="Admin\UserBundle\Entity\User", inversedBy="docente")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",
     * nullable=false
     * )
     */
protected $user;


/** 
     * @var Escuela
     * @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Escuela", inversedBy="docentes")
     * @ORM\JoinColumn(name="escuela_id", referencedColumnName="id",
     * nullable=false
     * )
     */
protected $escuela;

/** 
     * @var Programa
     * @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Programa", inversedBy="docentes")
     * @ORM\JoinColumn(name="programa_id", referencedColumnName="id",
     * nullable=true
     * )
     */
protected $programa;


/** 
     * @var Centro
     * @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Centro", inversedBy="docentes")
     * @ORM\JoinColumn(name="centro_id", referencedColumnName="id",
     * nullable=false
     * )
     */
protected $centro;


    /**
     * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\Planmejoramiento", mappedBy="docente")
     */
    protected $planmejoramiento;
    

    /**
     * @ORM\OneToMany(targetEntity="Admin\UnadBundle\Entity\Programa", mappedBy="lider")
     */
    protected $lider;
    
    
    
    
        /**
     * @ORM\OneToMany(targetEntity="Admin\UnadBundle\Entity\Curso", mappedBy="director")
     */
    protected $director;    


    /**
     * Set id
     *
     * @param integer $id
     * @return Docente
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set modalidad
     *
     * @param string $modalidad
     * @return Docente
     */
    public function setModalidad($modalidad)
    {
        $this->modalidad = $modalidad;

        return $this;
    }

    /**
     * Get modalidad
     *
     * @return string 
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }

    /**
     * Set vinculacion
     *
     * @param string $vinculacion
     * @return Docente
     */
    public function setVinculacion($vinculacion)
    {
        $this->vinculacion = $vinculacion;

        return $this;
    }

    /**
     * Get vinculacion
     *
     * @return string 
     */
    public function getVinculacion()
    {
        return $this->vinculacion;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return Docente
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set resolucion
     *
     * @param string $resolucion
     * @return Docente
     */
    public function setResolucion($resolucion)
    {
        $this->resolucion = $resolucion;

        return $this;
    }

    /**
     * Get resolucion
     *
     * @return string 
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }

    /**
     * Set perfil
     *
     * @param string $perfil
     * @return Docente
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return string 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set user
     *
     * @param \Admin\UserBundle\Entity\User $user
     * @return Docente
     */
    public function setUser(\Admin\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Admin\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set escuela
     *
     * @param \Admin\UnadBundle\Entity\Escuela $escuela
     * @return Docente
     */
    public function setEscuela(\Admin\UnadBundle\Entity\Escuela $escuela)
    {
        $this->escuela = $escuela;

        return $this;
    }

    /**
     * Get escuela
     *
     * @return \Admin\UnadBundle\Entity\Escuela 
     */
    public function getEscuela()
    {
        return $this->escuela;
    }

    /**
     * Set centro
     *
     * @param \Admin\UnadBundle\Entity\Centro $centro
     * @return Docente
     */
    public function setCentro(\Admin\UnadBundle\Entity\Centro $centro)
    {
        $this->centro = $centro;

        return $this;
    }

    /**
     * Get centro
     *
     * @return \Admin\UnadBundle\Entity\Centro 
     */
    public function getCentro()
    {
        return $this->centro;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->planmejoramiento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set programa
     *
     * @param \Admin\UnadBundle\Entity\Programa $programa
     * @return Docente
     */
    public function setPrograma(\Admin\UnadBundle\Entity\Programa $programa = null)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return \Admin\UnadBundle\Entity\Programa 
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Add planmejoramiento
     *
     * @param \Admin\MedBundle\Entity\Planmejoramiento $planmejoramiento
     * @return Docente
     */
    public function addPlanmejoramiento(\Admin\MedBundle\Entity\Planmejoramiento $planmejoramiento)
    {
        $this->planmejoramiento[] = $planmejoramiento;

        return $this;
    }

    /**
     * Remove planmejoramiento
     *
     * @param \Admin\MedBundle\Entity\Planmejoramiento $planmejoramiento
     */
    public function removePlanmejoramiento(\Admin\MedBundle\Entity\Planmejoramiento $planmejoramiento)
    {
        $this->planmejoramiento->removeElement($planmejoramiento);
    }

    /**
     * Get planmejoramiento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlanmejoramiento()
    {
        return $this->planmejoramiento;
    }

    /**
     * Add lider
     *
     * @param \Admin\UnadBundle\Entity\Programa $lider
     * @return Docente
     */
    public function addLider(\Admin\UnadBundle\Entity\Programa $lider)
    {
        $this->lider[] = $lider;

        return $this;
    }

    /**
     * Remove lider
     *
     * @param \Admin\UnadBundle\Entity\Programa $lider
     */
    public function removeLider(\Admin\UnadBundle\Entity\Programa $lider)
    {
        $this->lider->removeElement($lider);
    }

    /**
     * Get lider
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLider()
    {
        return $this->lider;
    }
}
