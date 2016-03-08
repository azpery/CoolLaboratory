<?php

namespace AppBundle\Entity;
use JMS\Serializer\Annotation\MaxDepth;

/**
 * Projet
 */
class Projet
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $categorie;

    /**
     * @var \DateTime
     */
    private $deadline;

    /**
     * @var \DateTime
     */
    private $datecrea;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Developpeur
     *@MaxDepth(2)
     */
    private $idchef;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Projet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Projet
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     *
     * @return Projet
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set datecrea
     *
     * @param \DateTime $datecrea
     *
     * @return Projet
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idchef
     *
     * @param \AppBundle\Entity\Developpeur $idchef
     *
     * @return Projet
     */
    public function setIdchef(\AppBundle\Entity\Developpeur $idchef )
    {
        $this->idchef = $idchef;

        return $this;
    }

    /**
     * Get idchef
     *
     * @return \AppBundle\Entity\Developpeur
     */
    public function getIdchef()
    {
        return $this->idchef;
    }

    /**
     * Add iddev
     *
     * @param \AppBundle\Entity\Developpeur $iddev
     *
     * @return Projet
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
