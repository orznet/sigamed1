<?php
namespace Admin\MedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="rol_plang")
 * @ORM\Entity(repositoryClass="Admin\MedBundle\Entity\rolplanglRepository")
 */
class Rolplang{

/**
 * @ORM\Id
 * @ORM\Column(name="id", type="integer", nullable=false)
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;

/**
 * @ORM\Column(type="decimal", scale=1, nullable=true)
 */
protected $horas;


/** 
* @var Plang
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Plangestion", inversedBy="roles")
* @ORM\JoinColumn(name="plan_id", referencedColumnName="id", nullable=false)
*/
protected $plang;

/** 
* @var Rol
* @ORM\ManyToOne(targetEntity="Admin\MedBundle\Entity\Rolacademico")
* @ORM\JoinColumn(name="rol_id", referencedColumnName="id", nullable=false)
*/
protected $rol;

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
     * @param string $horas
     * @return Rolplang
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return string 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set plang
     *
     * @param \Admin\MedBundle\Entity\Plangestion $plang
     * @return Rolplang
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
     * Set rol
     *
     * @param \Admin\MedBundle\Entity\Rolacademico $rol
     * @return Rolplang
     */
    public function setRol(\Admin\MedBundle\Entity\Rolacademico $rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Admin\MedBundle\Entity\Rolacademico 
     */
    public function getRol()
    {
        return $this->rol;
    }
}
