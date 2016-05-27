<?php

namespace EmailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="e2t_supports")
 */
class Support
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
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    protected $email;
    
    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", nullable=false)
     */
    protected $url;
    
    /**
     * @var integer $port
     *
     * @ORM\Column(name="port", type="string", nullable=true)
     */
    protected $port;
    
    /**
     * @ORM\ManyToOne(targetEntity="\EmailBundle\Entity\SupportType")
     * @ORM\JoinColumn(name="supportTypeId", referencedColumnName="id")
     */
    private $supportType;
    
    /**
     * @ORM\ManyToOne(targetEntity="\EmailBundle\Entity\SupportSecurity")
     * @ORM\JoinColumn(name="supportSecurityId", referencedColumnName="id")
     */
    private $supportSecurity;
    
    /**
     * @var integer $password
     *
     * @ORM\Column(name="password", type="string", nullable=false)
     */
    protected $password;
    
    /**
     * @var integer $textHtml
     *
     * @ORM\Column(name="textHtml", type="string", nullable=false)
     */
    protected $textHtml;

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
     * @return Support
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
     * Set email
     *
     * @param string $email
     *
     * @return Support
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Support
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set port
     *
     * @param string $port
     *
     * @return Support
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Support
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set textHtml
     *
     * @param string $textHtml
     *
     * @return Support
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
     * Set supportType
     *
     * @param \EmailBundle\Entity\SupportType $supportType
     *
     * @return Support
     */
    public function setSupportType(\EmailBundle\Entity\SupportType $supportType = null)
    {
        $this->supportType = $supportType;

        return $this;
    }

    /**
     * Get supportType
     *
     * @return \EmailBundle\Entity\SupportType
     */
    public function getSupportType()
    {
        return $this->supportType;
    }

    /**
     * Set supportSecurity
     *
     * @param \EmailBundle\Entity\SupportSecurity $supportSecurity
     *
     * @return Support
     */
    public function setSupportSecurity(\EmailBundle\Entity\SupportSecurity $supportSecurity = null)
    {
        $this->supportSecurity = $supportSecurity;

        return $this;
    }

    /**
     * Get supportSecurity
     *
     * @return \EmailBundle\Entity\SupportSecurity
     */
    public function getSupportSecurity()
    {
        return $this->supportSecurity;
    }
}
