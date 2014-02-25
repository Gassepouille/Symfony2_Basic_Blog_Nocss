<?php

namespace Chado\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChadoComments
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChadoComments
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
     * @ORM\ManyToOne(targetEntity="ChadoUser", inversedBy="comments")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="ChadoComments", mappedBy="parent", cascade={"remove"})
     */
    private $replies;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="ChadoComments", inversedBy="replies")
     */
    private $parent;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="ChadoArticle", inversedBy="comments")
     */
    private $article;

    /**
     * @var string
     *
     * @ORM\Column(name="Content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;


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
     * Set content
     *
     * @param string $content
     * @return ChadoComments
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ChadoComments
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->replies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \Chado\MainBundle\Entity\ChadoUser $user
     * @return ChadoComments
     */
    public function setUser(\Chado\MainBundle\Entity\ChadoUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Chado\MainBundle\Entity\ChadoUser 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add replies
     *
     * @param \Chado\MainBundle\Entity\ChadoComments $replies
     * @return ChadoComments
     */
    public function addReply(\Chado\MainBundle\Entity\ChadoComments $replies)
    {
        $this->replies[] = $replies;

        return $this;
    }

    /**
     * Remove replies
     *
     * @param \Chado\MainBundle\Entity\ChadoComments $replies
     */
    public function removeReply(\Chado\MainBundle\Entity\ChadoComments $replies)
    {
        $this->replies->removeElement($replies);
    }

    /**
     * Get replies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Set parent
     *
     * @param \Chado\MainBundle\Entity\ChadoComments $parent
     * @return ChadoComments
     */
    public function setParent(\Chado\MainBundle\Entity\ChadoComments $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Chado\MainBundle\Entity\ChadoComments 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set article
     *
     * @param \Chado\MainBundle\Entity\ChadoArticle $article
     * @return ChadoComments
     */
    public function setArticle(\Chado\MainBundle\Entity\ChadoArticle $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Chado\MainBundle\Entity\ChadoArticle 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
