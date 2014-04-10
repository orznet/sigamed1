<?php
namespace Admin\UserBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;


class Parabuscar{
    
    /**
     * @Assert\NotBlank()
     */
    public $texto;
    
    
    
        /**
     * @Assert\NotBlank()
     */
    public $parametro;
}
?>
