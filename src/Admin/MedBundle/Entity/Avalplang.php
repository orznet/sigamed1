<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @ORM\Entity
 * @ORM\Table(name="aval_plangestion")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\AvalplangRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Avalplang{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
     */
 protected $id;
 
 
  /**
  * @ORM\Column(type="string", length=5)
  */
protected $perfil;

 /**
  * @ORM\Column(type="text", length=1024, nullable=true)
  * 
  */
protected $observaciones;

 /**
  * @ORM\Column(type="datetime", nullable=true)
  */
protected $fecha_aval;

 /**
  * @ORM\Column(type="smallint", nullable=true)
  */
protected $avalado;

 /** 
    * @var Plan 
    * @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Plangestion", inversedBy="avales")
    * @ORM\JoinColumn(name="plangestion_id", referencedColumnName="id",
    * nullable=false
    * )
    */
protected $plan;

/** 
    * @var User 
    * @ORM\ManyToOne(targetEntity="Admin\UserBundle\Entity\User")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id",
    * nullable=false
    * )
    */
protected $user;


    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Length( max = "255" )
     */
    
protected $path;


    /**
     * @Assert\File(
     *     maxSize = "4000000", 
     *     maxSizeMessage = "El tamaño máximo permitido es de 1MB",
     *     mimeTypes = {"application/pdf", "application/x-pdf"},
     *     mimeTypesMessage = "Tipo de archivo no válido"
     * )
     */
 private $file;

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
     * Set perfil
     *
     * @param string $perfil
     * @return Avalplang
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return Avalplang
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
     * Set fecha_aval
     *
     * @param \DateTime $fechaAval
     * @return Avalplang
     */
    public function setFechaAval($fechaAval)
    {
        $this->fecha_aval = $fechaAval;

        return $this;
    }

    /**
     * Get fecha_aval
     *
     * @return \DateTime 
     */
    public function getFechaAval()
    {
        return $this->fecha_aval;
    }

    /**
     * Set avalado
     *
     * @param integer $avalado
     * @return Avalplang
     */
    public function setAvalado($avalado)
    {
        $this->avalado = $avalado;

        return $this;
    }

    /**
     * Get avalado
     *
     * @return integer 
     */
    public function getAvalado()
    {
        return $this->avalado;
    }
    
     /**
     * Get avalado
     *
     * @return integer 
     */
    public function getEstado()
    {
        if ($this->avalado == 1){
        return 'Aprobado';
        }
        else if ($this->avalado == 2){
        return 'Rechazado';  
        }
        else 
        return 'Sin Revisar';    
        
    }

    /**
     * Set plan
     *
     * @param \Admin\MedBundle\Entity\Plangestion $plan
     * @return Avalplang
     */
    public function setPlan(\Admin\MedBundle\Entity\Plangestion $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return \Admin\MedBundle\Entity\Plangestion 
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set user
     *
     * @param \Admin\UserBundle\Entity\User $user
     * @return Avalplang
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
    
         /******* Logica Archivos**/
    
     public function getAbsolutePath() {
        return null === $this->path 
                ? null 
                : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path 
                ? null 
                : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        return 'archivos/aval/';
    }
      /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)     {
        $this->file = $file;
     //   $this->descripcion = 'adjunto';

        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()     {
        return $this->file;
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()     {
        if (null !== $this->getFile()) {
            // haz lo que quieras para generar un nombre único
            //$filename = sha1(uniqid(mt_rand(), true));
            $filename = 'plangestion-'.$this->getPlan()->getId()->getId();
            $this->path = $filename . '.' . $this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()     {
        if (null === $this->getFile()) {
            return;
        }

        // si hay un error al mover el archivo, move() automáticamente
        // envía una excepción. This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->path);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir() . '/' . $this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

        /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    

    /**
     * Set path
     *
     * @param string $path
     * @return Accionespm
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    
    
}
