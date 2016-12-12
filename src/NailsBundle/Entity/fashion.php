<?php

namespace NailsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Nails_Fachion")
 */
class NailsFachion
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
     * @ORM\Column(name="NailsFachionName", type="string", length=255)
     */
    protected $NailsFachionName;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}