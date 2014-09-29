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
    * @ORM\Column(type="smallint", nullable=true)
    */
protected $periodo;

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
    * @ORM\OneToOne(targetEntity="Admin\MedBundle\Entity\Plangestion", mappedBy="id") 
    */
   protected $plangestion;
   

     /**
     * @ORM\ManyToMany(targetEntity="Admin\UnadBundle\Entity\Curso", inversedBy="docentes")
     * @ORM\JoinTable(name="docente_curso")
     */
    protected $tutoria;
    
  
   /**
    * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\redTutores", mappedBy="tutor") 
    */
   protected $evaladirector;
   
    /**
    * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\coevalTutor", mappedBy="tutor") 
    */
   protected $evaldedirector;
   
    /**
    * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\coevalPares", mappedBy="evaluado") 
    */
   protected $coevaldepar;
   
   
    /**
    * @ORM\OneToOne(targetEntity="Admin\MedBundle\Entity\Heteroeval", mappedBy="docente") 
    */
   protected $heteroeval;
   
    /**
    * @ORM\OneToOne(targetEntity="Admin\MedBundle\Entity\Evaluacion", mappedBy="docente") 
    */
   protected $evaluacion;
   
    /**
    * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\coevalPares", mappedBy="evaluador") 
    */
   protected $ternado;
   
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
            if ($this->modalidad == 'TC'){
            return 'Tiempo Completo';   
        }
        Elseif($this->modalidad == 'MT'){
            return 'Medio Tiempo';
        }
        Elseif($this->modalidad == 'HC'){
            return 'Hora Catedra';
        }
        Else {
          return $this->modalidad;  
        }
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
        if ($this->vinculacion == 'DC'){
            return 'De Carrera';   
        }
        Elseif($this->vinculacion == 'DO'){
            return 'Ocasional';
        }
        Elseif($this->vinculacion == 'HC'){
            return 'Hora Catedra';
        }
        Else {
          return $this->vinculacion;  
        }
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

    /**
     * Add director
     *
     * @param \Admin\UnadBundle\Entity\Curso $director
     * @return Docente
     */
    public function addDirector(\Admin\UnadBundle\Entity\Curso $director)
    {
        $this->director[] = $director;

        return $this;
    }

    /**
     * Remove director
     *
     * @param \Admin\UnadBundle\Entity\Curso $director
     */
    public function removeDirector(\Admin\UnadBundle\Entity\Curso $director)
    {
        $this->director->removeElement($director);
    }

    /**
     * Get director
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Add tutoria
     *
     * @param \Admin\UnadBundle\Entity\Curso $tutoria
     * @return Docente
     */
    public function addTutorium(\Admin\UnadBundle\Entity\Curso $tutoria)
    {
        $this->tutoria[] = $tutoria;

        return $this;
    }

    /**
     * Remove tutoria
     *
     * @param \Admin\UnadBundle\Entity\Curso $tutoria
     */
    public function removeTutorium(\Admin\UnadBundle\Entity\Curso $tutoria)
    {
        $this->tutoria->removeElement($tutoria);
    }

    /**
     * Get tutoria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTutoria()
    {
        return $this->tutoria;
    }

    /**
     * Set plangestion
     *
     * @param \Admin\MedBundle\Entity\Plangestion $plangestion
     * @return Docente
     */
    public function setPlangestion(\Admin\MedBundle\Entity\Plangestion $plangestion = null)
    {
        $this->plangestion = $plangestion;

        return $this;
    }

    /**
     * Get plangestion
     *
     * @return \Admin\MedBundle\Entity\Plangestion 
     */
    public function getPlangestion()
    {
        return $this->plangestion;
    }

    /**
     * Add evaladirector
     *
     * @param \Admin\MedBundle\Entity\redTutores $evaladirector
     * @return Docente
     */
    public function addEvaladirector(\Admin\MedBundle\Entity\redTutores $evaladirector)
    {
        $this->evaladirector[] = $evaladirector;

        return $this;
    }

    /**
     * Remove evaladirector
     *
     * @param \Admin\MedBundle\Entity\redTutores $evaladirector
     */
    public function removeEvaladirector(\Admin\MedBundle\Entity\redTutores $evaladirector)
    {
        $this->evaladirector->removeElement($evaladirector);
    }

    /**
     * Get evaladirector
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaladirector()
    {
        return $this->evaladirector;
    }

    /**
     * Add evaldedirector
     *
     * @param \Admin\MedBundle\Entity\coevalTutor $evaldedirector
     * @return Docente
     */
    public function addEvaldedirector(\Admin\MedBundle\Entity\coevalTutor $evaldedirector)
    {
        $this->evaldedirector[] = $evaldedirector;

        return $this;
    }

    /**
     * Remove evaldedirector
     *
     * @param \Admin\MedBundle\Entity\coevalTutor $evaldedirector
     */
    public function removeEvaldedirector(\Admin\MedBundle\Entity\coevalTutor $evaldedirector)
    {
        $this->evaldedirector->removeElement($evaldedirector);
    }

    /**
     * Get evaldedirector
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaldedirector()
    {
        return $this->evaldedirector;
    }

    /**
     * Add coevaldepar
     *
     * @param \Admin\MedBundle\Entity\coevalPares $coevaldepar
     * @return Docente
     */
    public function addCoevaldepar(\Admin\MedBundle\Entity\coevalPares $coevaldepar)
    {
        $this->coevaldepar[] = $coevaldepar;

        return $this;
    }

    /**
     * Remove coevaldepar
     *
     * @param \Admin\MedBundle\Entity\coevalPares $coevaldepar
     */
    public function removeCoevaldepar(\Admin\MedBundle\Entity\coevalPares $coevaldepar)
    {
        $this->coevaldepar->removeElement($coevaldepar);
    }

    /**
     * Get coevaldepar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoevaldepar()
    {
        return $this->coevaldepar;
    }

    /**
     * Add ternado
     *
     * @param \Admin\MedBundle\Entity\coevalPares $ternado
     * @return Docente
     */
    public function addTernado(\Admin\MedBundle\Entity\coevalPares $ternado)
    {
        $this->ternado[] = $ternado;

        return $this;
    }

    /**
     * Remove ternado
     *
     * @param \Admin\MedBundle\Entity\coevalPares $ternado
     */
    public function removeTernado(\Admin\MedBundle\Entity\coevalPares $ternado)
    {
        $this->ternado->removeElement($ternado);
    }

    /**
     * Get ternado
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTernado()
    {
        return $this->ternado;
    }

    /**
     * Set heteroeval
     *
     * @param \Admin\MedBundle\Entity\Heteroeval $heteroeval
     * @return Docente
     */
    public function setHeteroeval(\Admin\MedBundle\Entity\Heteroeval $heteroeval = null)
    {
        $this->heteroeval = $heteroeval;

        return $this;
    }

    /**
     * Get heteroeval
     *
     * @return \Admin\MedBundle\Entity\Heteroeval 
     */
    public function getHeteroeval()
    {
        return $this->heteroeval;
    }

    /**
     * Set evaluacion
     *
     * @param \Admin\MedBundle\Entity\Evaluacion $evaluacion
     * @return Docente
     */
    public function setEvaluacion(\Admin\MedBundle\Entity\Evaluacion $evaluacion = null)
    {
        $this->evaluacion = $evaluacion;

        return $this;
    }

    /**
     * Get evaluacion
     *
     * @return \Admin\MedBundle\Entity\Evaluacion 
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }

    /**
     * Set periodo
     *
     * @param integer $periodo
     * @return Docente
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
}
