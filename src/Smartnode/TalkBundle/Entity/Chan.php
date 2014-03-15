<?php

namespace Smartnode\TalkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chan
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Smartnode\TalkBundle\Entity\ChanRepository")
 */
class Chan
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
     * @ORM\JoinColumn(name="chanowner_id", referencedColumnName="id")
     */
    private $ownerid;

    /**
     * @var string
     *
     * @ORM\Column(name="channame", type="string", length=255)
     */
    private $channame;

    /**
     * @var string
     *
     * @ORM\Column(name="chanpass", type="string", length=255)
     */
    private $chanpass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationdate", type="datetime")
     */
    private $creationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="backimage", type="text", nullable=true)
     */
    private $backimage;

    /**
     * @var integer
     *
     * @ORM\Column(name="actived", type="smallint")
     */
    private $actived;

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
     * Set ownerid
     *
     * @param integer $ownerid
     * @return Chan
     */
    public function setOwnerid($ownerid)
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    /**
     * Get ownerid
     *
     * @return integer 
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }

    /**
     * Set channame
     *
     * @param string $channame
     * @return Chan
     */
    public function setChanname($channame)
    {
        $this->channame = $channame;

        return $this;
    }

    /**
     * Get channame
     *
     * @return string 
     */
    public function getChanname()
    {
        return $this->channame;
    }

    /**
     * Set chanpass
     *
     * @param string $chanpass
     * @return Chan
     */
    public function setChanpass($chanpass)
    {
        $this->chanpass = $chanpass;

        return $this;
    }

    /**
     * Get chanpass
     *
     * @return string 
     */
    public function getChanpass()
    {
        return $this->chanpass;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     * @return Chan
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
     * Set backimage
     *
     * @param string $backimage
     * @return Chan
     */
    public function setBackimage($backimage)
    {
        $this->backimage = $backimage;

        return $this;
    }

    /**
     * Get backimage
     *
     * @return string 
     */
    public function getBackimage()
    {
        return $this->backimage;
    }

    /**
     * Set actived
     *
     * @param integer $actived
     * @return Chan
     */
    public function setActived($actived)
    {
        $this->actived = $actived;

        return $this;
    }

    /**
     * Get actived
     *
     * @return integer 
     */
    public function getActived()
    {
        return $this->actived;
    }

    /**
     * Set score
     *
     * @param string $score
     * @return Chan
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
