<?php

namespace AppBundle\Entity;

/**
 * Rss
 */
class Rss
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $pubdate;

    /**
     * @var string
     */
    private $link;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Projet
     */
    private $idproj;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Rss
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Rss
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
     * Set pubdate
     *
     * @param \DateTime $pubdate
     *
     * @return Rss
     */
    public function setPubdate($pubdate)
    {
        $this->pubdate = $pubdate;

        return $this;
    }

    /**
     * Get pubdate
     *
     * @return \DateTime
     */
    public function getPubdate()
    {
        return $this->pubdate;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Rss
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
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
     * @return Rss
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
}
