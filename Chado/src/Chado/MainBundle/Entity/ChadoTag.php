<?php

namespace Chado\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChadoTag
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChadoTag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="ChadoArticle", mappedBy="tags")
     */
    private $articles;

    /**
     * @var string
     *
     * @ORM\Column(name="Tagname", type="string", length=255)
     */
    private $tagname;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tagname
     *
     * @param string $tagname
     * @return ChadoTag
     */
    public function setTagname($tagname)
    {
        $this->tagname = $tagname;

        return $this;
    }

    /**
     * Get tagname
     *
     * @return string 
     */
    public function getTagname()
    {
        return $this->tagname;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add articles
     *
     * @param \Chado\MainBundle\Entity\ChadoArticle $articles
     * @return ChadoTag
     */
    public function addArticle(\Chado\MainBundle\Entity\ChadoArticle $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Chado\MainBundle\Entity\ChadoArticle $articles
     */
    public function removeArticle(\Chado\MainBundle\Entity\ChadoArticle $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
