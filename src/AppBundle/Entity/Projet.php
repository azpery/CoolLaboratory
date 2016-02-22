<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="idChef", columns={"idChef"})})
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="text", length=65535, nullable=true)
     */
    private $categorie;

    /**
     * @var \Date
     *
     * @ORM\Column(name="deadline", type="date", nullable=true)
     */
    private $deadline;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateCrea", type="date", nullable=false)
     */
    private $datecrea;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Developpeur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Developpeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChef", referencedColumnName="id")
     * })
     */
    private $idchef;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Developpeur", mappedBy="idproj")
     */
    private $iddev;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddev = new \Doctrine\Common\Collections\ArrayCollection();
        // $this->deadline = date('Y-m-d');
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
     * @param \Date $deadline
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
     * @return \Date
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set datecrea
     *
     * @param \Date $datecrea
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
     * @return \Date
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
    public function setIdchef(\AppBundle\Entity\Developpeur $idchef)
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
