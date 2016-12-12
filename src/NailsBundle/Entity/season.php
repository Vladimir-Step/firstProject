<?php

namespace NailsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Nails_Season")
 */
class NailsSeason
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
     * @ORM\Column(name="NailsSeasonName", type="string", length=255)
     */
    protected $NailsSeasonName;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}