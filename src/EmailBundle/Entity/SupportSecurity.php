<?php

namespace EmailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="e2t_supports_security")
 */
class SupportSecurity
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string $security
     *
     * @ORM\Column(name="security", type="string", nullable=false)
     */
    protected $security;
    
    /**
     * @var string $defaultPort
     *
     * @ORM\Column(name="defaultPort", type="string", nullable=false)
     */
    protected $defaultPort;

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
     * Set security
     *
     * @param string $security
     *
     * @return SupportSecurity
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return string
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set defaultPort
     *
     * @param string $defaultPort
     *
     * @return SupportSecurity
     */
    public function setDefaultPort($defaultPort)
    {
        $this->defaultPort = $defaultPort;

        return $this;
    }

    /**
     * Get defaultPort
     *
     * @return string
     */
    public function getDefaultPort()
    {
        return $this->defaultPort;
    }
}
