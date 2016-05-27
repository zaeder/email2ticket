<?php

namespace EmailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="e2t_emails_attachement")
 */
class EmailAttachement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;
    
    /**
     * @var string $fileName
     *
     * @ORM\Column(name="fileName", type="string", nullable=false)
     */
    protected $fileName;
    
    /**
     * @var string $filePath
     *
     * @ORM\Column(name="filePath", type="string", nullable=true)
     */
    protected $filePath;
    
    /**
     * @var string $markAsSpam
     *
     * @ORM\Column(name="markAsSpam", type="boolean", nullable=false)
     */
    protected $markAsSpam;
    
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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return EmailAttachement
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     *
     * @return EmailAttachement
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set markAsSpam
     *
     * @param boolean $markAsSpam
     *
     * @return EmailAttachement
     */
    public function setMarkAsSpam($markAsSpam)
    {
        $this->markAsSpam = $markAsSpam;

        return $this;
    }

    /**
     * Get markAsSpam
     *
     * @return boolean
     */
    public function getMarkAsSpam()
    {
        return $this->markAsSpam;
    }

    /**
     * Set emailId
     *
     * @param \EmailBundle\Entity\Email $emailId
     *
     * @return EmailAttachement
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
