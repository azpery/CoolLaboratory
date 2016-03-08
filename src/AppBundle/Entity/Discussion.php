<?php

namespace AppBundle\Entity;
use JMS\Serializer\Annotation\MaxDepth;

/**
 * Discussion
 */
class Discussion
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var bool
     */
    private $etat = '0';

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Projet
     *@MaxDepth(2)
     */
    private $idproj;


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Discussion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Discussion
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set etat
     *
     * @param bool $etat
     *
     * @return Discussion
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idproj
     *
     * @param \AppBundle\Entity\Projet $idproj
     *
     * @return Discussion
     */
    public function setIdproj(\AppBundle\Entity\Projet $idproj)
    {
        $this->idproj = $idproj;

        return $this;
    }

    /**
     * Get idproj
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getIdproj()
    {
        return $this->idproj;
    }
}
