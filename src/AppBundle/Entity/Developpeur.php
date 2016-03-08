<?php

namespace AppBundle\Entity;
use JMS\Serializer\Annotation\MaxDepth;

/**
 * Developpeur
 */
class Developpeur
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $mdp;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *@MaxDepth(2)
     */
    private $idproj;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *@MaxDepth(2)
     */
    private $idtick;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idproj = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idtick = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Developpeur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Developpeur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Developpeur
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Developpeur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }
    /**
     * Set id
     *
     * @param string $id
     *
     * @return Developpeur
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Add idproj
     *
     * @param \AppBundle\Entity\Projet $idproj
     *
     * @return Developpeur
     */
    public function addIdproj(\AppBundle\Entity\Projet $idproj)
    {
        $this->idproj[] = $idproj;

        return $this;
    }

    /**
     * Remove idproj
     *
     * @param \AppBundle\Entity\Projet $idproj
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdproj(\AppBundle\Entity\Projet $idproj)
    {
        return $this->idproj->removeElement($idproj);
    }

    /**
     * Get idproj
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdproj()
    {
        return $this->idproj;
    }

    /**
     * Add idtick
     *
     * @param \AppBundle\Entity\Ticket $idtick
     *
     * @return Developpeur
     */
    public function addIdtick(\AppBundle\Entity\Ticket $idtick)
    {
        $this->idtick[] = $idtick;

        return $this;
    }

    /**
     * Remove idtick
     *
     * @param \AppBundle\Entity\Ticket $idtick
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdtick(\AppBundle\Entity\Ticket $idtick)
    {
        return $this->idtick->removeElement($idtick);
    }

    /**
     * Get idtick
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdtick()
    {
        return $this->idtick;
    }
}
