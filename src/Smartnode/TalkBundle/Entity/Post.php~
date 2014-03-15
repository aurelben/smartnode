<?php

namespace Smartnode\TalkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smartnode\TalkBundle\Entity\PostRepository")
 */
class Post
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Smartnode\userBundle\Entity\User")
     * @ORM\JoinColumn(name="postowner_id", referencedColumnName="id")
     */
    protected $postowner;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Smartnode\TalkBundle\Entity\Chan")
     */
    private $postchan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationdate", type="datetime")
     */
    private $creationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="postcontent", type="text")
     */
    private $postcontent;

    /**
     * @var integer
     *
     * @ORM\Column(name="activated", type="smallint")
     */
    private $activated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifidate", type="datetime")
     */
    private $modifidate;

    /**
     * @var string
     *
     * @ORM\Column(name="score", type="decimal", nullable=true)
     */
    private $score;


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
     * Set postowner
     *
     * @param integer $postowner
     * @return Post
     */
    public function setPostowner($postowner)
    {
        $this->postowner = $postowner;

        return $this;
    }

    /**
     * Get postowner
     *
     * @return integer 
     */
    public function getPostowner()
    {
        return $this->postowner;
    }

    /**
     * Set postchan
     *
     * @param integer $postchan
     * @return Post
     */
    public function setPostchan($postchan)
    {
        $this->postchan = $postchan;

        return $this;
    }

    /**
     * Get postchan
     *
     * @return integer 
     */
    public function getPostchan()
    {
        return $this->postchan;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     * @return Post
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime 
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set postcontent
     *
     * @param string $postcontent
     * @return Post
     */
    public function setPostcontent($postcontent)
    {
        $this->postcontent = $postcontent;

        return $this;
    }

    /**
     * Get postcontent
     *
     * @return string 
     */
    public function getPostcontent()
    {
        return $this->postcontent;
    }

    /**
     * Set activated
     *
     * @param integer $activated
     * @return Post
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return integer 
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set modifidate
     *
     * @param \DateTime $modifidate
     * @return Post
     */
    public function setModifidate($modifidate)
    {
        $this->modifidate = $modifidate;

        return $this;
    }

    /**
     * Get modifidate
     *
     * @return \DateTime 
     */
    public function getModifidate()
    {
        return $this->modifidate;
    }

    /**
     * Set score
     *
     * @param string $score
     * @return Post
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string 
     */
    public function getScore()
    {
        return $this->score;
    }
}
