<?php
namespace Admin\UnadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="programa")
 * @ORM\Entity(repositoryClass="Admin\UnadBundle\Entity\ProgramaRepository")
 */
class Programa{
   
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
     * @var Escuela 
     * @ORM\ManyToOne(targetEntity="Admin\UnadBundle\Entity\Escuela", inversedBy="programas")
     * @ORM\JoinColumn(name="escuela_id", referencedColumnName="id",
     * nullable=true,
     * onDelete="CASCADE"
     * )
     */
protected $escuela;

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
     * @return Programa
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
     * @return Programa
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
     * Set escuela
     *
     * @param \Admin\UnadBundle\Entity\Escuela $escuela
     * @return Programa
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
}
