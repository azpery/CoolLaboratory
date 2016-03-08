<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\MaxDepth;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="idDev", columns={"idDev"}), @ORM\Index(name="idDisc", columns={"idDisc"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoi", type="date", nullable=true)
     */
    private $dateenvoi;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Discussion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Discussion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDisc", referencedColumnName="id")
     * })
     *@MaxDepth(2)
     */
    private $iddisc;

    /**
     * @var \AppBundle\Entity\Developpeur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Developpeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDev", referencedColumnName="id")
     * })
     *@MaxDepth(2)
     */
    private $iddev;



    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return Message
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
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
     * Set iddisc
     *
     * @param \AppBundle\Entity\Discussion $iddisc
     *
     * @return Message
     */
    public function setIddisc(\AppBundle\Entity\Discussion $iddisc )
    {
        $this->iddisc = $iddisc;

        return $this;
    }

    /**
     * Get iddisc
     *
     * @return \AppBundle\Entity\Discussion
     */
    public function getIddisc()
    {
        return $this->iddisc;
    }

    /**
     * Set iddev
     *
     * @param \AppBundle\Entity\Developpeur $iddev
     *
     * @return Message
     */
    public function setIddev(\AppBundle\Entity\Developpeur $iddev )
    {
        $this->iddev = $iddev;

        return $this;
    }

    /**
     * Get iddev
     *
     * @return \AppBundle\Entity\Developpeur
     */
    public function getIddev()
    {
        return $this->iddev;
    }
}
