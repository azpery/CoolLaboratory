<?php

namespace AppBundle\Entity;
use JMS\Serializer\Annotation\MaxDepth;

/**
 * Ticket
 */
class Ticket
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $etat = '0';

    /**
     * @var \DateTime
     */
    private $datecrea;

    /**
     * @var \DateTime
     */
    private $echeance;

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
     * @var \Doctrine\Common\Collections\Collection
     *@MaxDepth(2)

     */
    private $iddev;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddev = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Ticket
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ticket
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
     * Set etat
     *
     * @param int $etat
     *
     * @return Ticket
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set datecrea
     *
     * @param \DateTime $datecrea
     *
     * @return Ticket
     */
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;

        return $this;
    }

    /**
     * Get datecrea
     *
     * @return \DateTime
     */
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set echeance
     *
     * @param \DateTime $echeance
     *
     * @return Ticket
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     * Get echeance
     *
     * @return \DateTime
     */
    public function getEcheance()
    {
        return $this->echeance;
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
     * @return Ticket
     */
    public function setIdproj(\AppBundle\Entity\Projet $idproj )
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

    /**
     * Add iddev
     *
     * @param \AppBundle\Entity\Developpeur $iddev
     *
     * @return Ticket
     */
    public function addIddev(\AppBundle\Entity\Developpeur $iddev)
    {
        $this->iddev[] = $iddev;

        return $this;
    }

    /**
     * Remove iddev
     *
     * @param \AppBundle\Entity\Developpeur $iddev
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIddev(\AppBundle\Entity\Developpeur $iddev)
    {
        return $this->iddev->removeElement($iddev);
    }

    /**
     * Get iddev
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIddev()
    {
        return $this->iddev;
    }
}
