<?php

namespace NailsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Nails_Info")
 */
class NailsInfo
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
     * @var int
     *
     * @ORM\Column(name="Info_User_id", type="integer")
     */
    protected $Info_User_id;

    /**
     * @var int
     *
     * @ORM\Column(name="Info_Style_id", type="integer")
     */
    protected $Info_Style_id;

    /**
     * @var int
     *
     * @ORM\Column(name="Info_Fashion_id", type="integer")
     */
    protected $Info_Fashion_id;

    /**
     * @var int
     *
     * @ORM\Column(name="Info_Color_id", type="integer")
     */
    protected $Info_Color_id;

    /**
     * @var int
     *
     * @ORM\Column(name="Info_Type_id", type="integer")
     */
    protected $Info_Type_id;

    /**
     * @var int
     *
     * @ORM\Column(name="Info_Season_id", type="integer")
     */
    protected $Info_Season_id;

    /**
     * @var int
     *
     * @ORM\Column(name="Info_Files_id", type="integer")
     */
    protected $Info_Files_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}