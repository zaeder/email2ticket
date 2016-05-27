<?php

namespace EmailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="e2t_emails")
 */
class Email
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;
    
    /**
     * @var string $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    protected $date;
    
    /**
     * @var string $subject
     *
     * @ORM\Column(name="subject", type="string", nullable=false)
     */
    protected $subject;
    
    /**
     * @var string $fromName
     *
     * @ORM\Column(name="fromName", type="string", nullable=false)
     */
    protected $fromName;
    
    /**
     * @var integer $fromAddress
     *
     * @ORM\Column(name="fromAddress", type="string", nullable=false)
     */
    protected $fromAddress;
    
    /**
     * @var integer $textPlain
     *
     * @ORM\Column(name="textPlain", type="text", nullable=false)
     */
    protected $textPlain;
    
    /**
     * @var integer $textHtml
     *
     * @ORM\Column(name="textHtml", type="text", nullable=false)
     */
    protected $textHtml;
    
    /**
     * @ORM\ManyToOne(targetEntity="\EmailBundle\Entity\Support")
     * @ORM\JoinColumn(name="supportId", referencedColumnName="id")
     */
    private $supportId;

    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Email
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
     * Set subject
     *
     * @param string $subject
     *
     * @return Email
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set fromName
     *
     * @param string $fromName
     *
     * @return Email
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;

        return $this;
    }

    /**
     * Get fromName
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Set fromAddress
     *
     * @param string $fromAddress
     *
     * @return Email
     */
    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;

        return $this;
    }

    /**
     * Get fromAddress
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->fromAddress;
    }

    /**
     * Set textPlain
     *
     * @param string $textPlain
     *
     * @return Email
     */
    public function setTextPlain($textPlain)
    {
        $this->textPlain = $textPlain;

        return $this;
    }

    /**
     * Get textPlain
     *
     * @return string
     */
    public function getTextPlain()
    {
        return $this->textPlain;
    }

    /**
     * Set textHtml
     *
     * @param string $textHtml
     *
     * @return Email
     */
    public function setTextHtml($textHtml)
    {
        $this->textHtml = $textHtml;

        return $this;
    }

    /**
     * Get textHtml
     *
     * @return string
     */
    public function getTextHtml()
    {
        return $this->textHtml;
    }

    /**
     * Set supportId
     *
     * @param \EmailBundle\Entity\Support $supportId
     *
     * @return Email
     */
    public function setSupportId(\EmailBundle\Entity\Support $supportId = null)
    {
        $this->supportId = $supportId;

        return $this;
    }

    /**
     * Get supportId
     *
     * @return \EmailBundle\Entity\Support
     */
    public function getSupportId()
    {
        return $this->supportId;
    }
}
