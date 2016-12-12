<?php
// src/NailsBundle/Entity/style.php

namespace NailsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Nails_Style")
 */
class NailsStyle
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
     * @ORM\Column(name="NailsStyleName", type="string", length=255)
     */
    protected $NailsStyleName;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}