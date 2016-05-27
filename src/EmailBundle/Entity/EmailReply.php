<?php

namespace EmailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="e2t_emails_reply")
 */
class EmailReply
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;
    
    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    protected $email;
    
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    protected $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="\EmailBundle\Entity\Email")
     * @ORM\JoinColumn(name="emailId", referencedColumnName="id")
     */
    private $emailId;

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
     * Set email
     *
     * @param string $email
     *
     * @return EmailReply
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
     * Set name
     *
     * @param string $name
     *
     * @return EmailReply
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set emailId
     *
     * @param \EmailBundle\Entity\Email $emailId
     *
     * @return EmailReply
     */
    public function setEmailId(\EmailBundle\Entity\Email $emailId = null)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * Get emailId
     *
     * @return \EmailBundle\Entity\Email
     */
    public function getEmailId()
    {
        return $this->emailId;
    }
}
