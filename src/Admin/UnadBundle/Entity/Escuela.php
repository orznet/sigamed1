<?php
namespace Admin\UnadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="escuela")
 * @ORM\Entity(repositoryClass="Admin\UnadBundle\Entity\EscuelaRepository")
 */

class Escuela{
   
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
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */

protected $sigla;


      /** 
     * @var Decano 
     * @ORM\ManyToOne(targetEntity="Admin\UserBundle\Entity\User", inversedBy="decano")
     * @ORM\JoinColumn(name="decano_id", referencedColumnName="id",
     * nullable=false,
     * onDelete="CASCADE"
     * )
     */
protected $decano;


      /** 
     * @var Secretaria 
     * @ORM\ManyToOne(targetEntity="Admin\UserBundle\Entity\User", inversedBy="secretaria")
     * @ORM\JoinColumn(name="secretaria_id", referencedColumnName="id",
     * nullable=true,
     * onDelete="CASCADE"
     * )
     */
protected $secretaria; 


    /**
     * Set id
     * @param integer $id
     * @return integer 
     */
    public function setId($id)
    {
        return $this->id = $id;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Escuela
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
     * Set sigla
     *
     * @param string $sigla
     * @return Escuela
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string 
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set decano
     *
     * @param \Admin\UserBundle\Entity\User $decano
     * @return Escuela
     */
    public function setDecano(\Admin\UserBundle\Entity\User $decano)
    {
        $this->decano = $decano;

        return $this;
    }

    /**
     * Get decano
     *
     * @return \Admin\UserBundle\Entity\User 
     */
    public function getDecano()
    {
        return $this->decano;
    }

    /**
     * Set secretaria
     *
     * @param \Admin\UserBundle\Entity\User $secretaria
     * @return Escuela
     */
    public function setSecretaria(\Admin\UserBundle\Entity\User $secretaria = null)
    {
        $this->secretaria = $secretaria;

        return $this;
    }

    /**
     * Get secretaria
     *
     * @return \Admin\UserBundle\Entity\User 
     */
    public function getSecretaria()
    {
        return $this->secretaria;
    }
}
