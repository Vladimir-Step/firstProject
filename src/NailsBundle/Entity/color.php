<?php

namespace NailsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Nails_Color")
 */
class color
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NailsColorName", type="string", length=255)
     */
    protected $NailsColorName;


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
     * Set nailsColorName
     *
     * @param string $nailsColorName
     *
     * @return color
     */
    public function setNailsColorName($nailsColorName)
    {
        $this->NailsColorName = $nailsColorName;

        return $this;
    }

    /**
     * Get nailsColorName
     *
     * @return string
     */
    public function getNailsColorName()
    {
        return $this->NailsColorName;
    }
}
