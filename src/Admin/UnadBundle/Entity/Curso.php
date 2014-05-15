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
     * @ORM\Column(type="string", length=15)
     */
protected $tipologia;

/**
     * @ORM\Column(type="integer", length=2)
     */
protected $creditos;
}
