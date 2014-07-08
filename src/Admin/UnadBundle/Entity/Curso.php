<?php
namespace Admin\UnadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="curso")
 * @ORM\Entity(repositoryClass="Admin\UnadBundle\Entity\CursoRepository")
 */
class Curso{
   
/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="IDENTITY")
     */
 protected $id;    
 
 /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
protected $nombre;
         
/**
     * @ORM\Column(type="string", length=15)
     * @Assert\NotBlank()
     */
protected $nivel;

/**
     * @ORM\Column(type="string", length=25)
     */
protected $tipologia;

/**
     * @ORM\Column(type="integer", length=2)
     */
protected $creditos;

/**
     * @ORM\Column(type="string", length=10)
     */
protected $escuela;



      /** 
     * @var Director 
     * @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Docente", inversedBy="director")
     * @ORM\JoinColumn(name="director_id", referencedColumnName="id",
     * nullable=true
     * )
     */
protected $director;


      /** 
     * @var Programa 
     * @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Programa", inversedBy="cursos")
     * @ORM\JoinColumn(name="programa_id", referencedColumnName="id",
     * nullable=true
     * )
     */
protected $programa;


    /**
     * @ORM\ManyToMany(targetEntity="Admin\UnadBundle\Entity\Docente", mappedBy="tutoria")
     */
  protected $docentes;

    /**
    * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\redTutores", mappedBy="curso") 
    */
   protected $evaldetutor;
   
   
    /**
    * @ORM\OneToMany(targetEntity="Admin\MedBundle\Entity\coevalTutor", mappedBy="curso") 
    */
   protected $evalatutor;
   
   
    /**
    * @ORM\OneToOne(targetEntity="Admin\MedBundle\Entity\coevalDirector", mappedBy="curso") 
    */
   protected $coeval;
  
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
     * Set nombre
     *
     * @param string $nombre
     * @return Curso
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return Curso
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set tipologia
     *
     * @param string $tipologia
     * @return Curso
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return string 
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set creditos
     *
     * @param integer $creditos
     * @return Curso
     */
    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    /**
     * Get creditos
     *
     * @return integer 
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set escuela
     *
     * @param string $escuela
     * @return Curso
     */
    public function setEscuela($escuela)
    {
        $this->escuela = $escuela;

        return $this;
    }

    /**
     * Get escuela
     *
     * @return string 
     */
    public function getEscuela()
    {
        return $this->escuela;
    }

    /**
     * Set Director
     *
     * @param \Admin\UnadBundle\Entity\Docente $director
     * @return Curso
     */
    public function setDirector(\Admin\UnadBundle\Entity\Docente $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get Director
     *
     * @return \Admin\UnadBundle\Entity\Docente 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set Programa
     *
     * @param \Admin\UnadBundle\Entity\Programa $programa
     * @return Curso
     */
    public function setPrograma(\Admin\UnadBundle\Entity\Programa $programa = null)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get Programa
     *
     * @return \Admin\UnadBundle\Entity\Programa 
     */
    public function getPrograma()
    {
        return $this->programa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->docentes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add docentes
     *
     * @param \Admin\UnadBundle\Entity\Docente $docentes
     * @return Curso
     */
    public function addDocente(\Admin\UnadBundle\Entity\Docente $docentes)
    {
        $this->docentes[] = $docentes;

        return $this;
    }

    /**
     * Remove docentes
     *
     * @param \Admin\UnadBundle\Entity\Docente $docentes
     */
    public function removeDocente(\Admin\UnadBundle\Entity\Docente $docentes)
    {
        $this->docentes->removeElement($docentes);
    }

    /**
     * Get docentes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocentes()
    {
        return $this->docentes;
    }

    /**
     * Add evaldetutor
     *
     * @param \Admin\MedBundle\Entity\redTutores $evaldetutor
     * @return Curso
     */
    public function addEvaldetutor(\Admin\MedBundle\Entity\redTutores $evaldetutor)
    {
        $this->evaldetutor[] = $evaldetutor;

        return $this;
    }

    /**
     * Remove evaldetutor
     *
     * @param \Admin\MedBundle\Entity\redTutores $evaldetutor
     */
    public function removeEvaldetutor(\Admin\MedBundle\Entity\redTutores $evaldetutor)
    {
        $this->evaldetutor->removeElement($evaldetutor);
    }

    /**
     * Get evaldetutor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaldetutor()
    {
        return $this->evaldetutor;
    }

    /**
     * Add evalatutor
     *
     * @param \Admin\MedBundle\Entity\coevalTutor $evalatutor
     * @return Curso
     */
    public function addEvalatutor(\Admin\MedBundle\Entity\coevalTutor $evalatutor)
    {
        $this->evalatutor[] = $evalatutor;

        return $this;
    }

    /**
     * Remove evalatutor
     *
     * @param \Admin\MedBundle\Entity\coevalTutor $evalatutor
     */
    public function removeEvalatutor(\Admin\MedBundle\Entity\coevalTutor $evalatutor)
    {
        $this->evalatutor->removeElement($evalatutor);
    }

    /**
     * Get evalatutor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvalatutor()
    {
        return $this->evalatutor;
    }

    /**
     * Set coeval
     *
     * @param \Admin\MedBundle\Entity\coevalDirector $coeval
     * @return Curso
     */
    public function setCoeval(\Admin\MedBundle\Entity\coevalDirector $coeval = null)
    {
        $this->coeval = $coeval;

        return $this;
    }

    /**
     * Get coeval
     *
     * @return \Admin\MedBundle\Entity\coevalDirector 
     */
    public function getCoeval()
    {
        return $this->coeval;
    }
}
