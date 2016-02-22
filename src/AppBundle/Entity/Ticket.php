<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="idProj", columns={"idProj"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat = 1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCrea", type="date", nullable=false)
     */
    private $datecrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="echeance", type="date", nullable=false)
     */
    private $echeance;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Projet
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProj", referencedColumnName="id")
     * })
     */
    private $idproj;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Developpeur", mappedBy="idtick")
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
    public function setIdproj(\AppBundle\Entity\Projet $idproj = null)
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
