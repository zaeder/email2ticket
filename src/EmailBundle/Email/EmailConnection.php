<?php

namespace EmailBundle\Email;
use PhpImap\Mailbox as ImapMailbox;

class EmailConnection {
    
    private $mailbox;
    private $protocol;
    private $url;
    private $port;
    private $ssl;
    private $email;
    private $password;
    
    public function __construct() {
        /*$this->setProtocol($support['protocol'])
             ->setUrl($support['url'])
             ->setPort($support['port'])
             ->setSsl($support['ssl'])
             ->setEmail($support['email'])
             ->setPassword($support['password'])
             ->setMailbox();*/
    }
    
    public function setMailbox()
    {
        die('ok');
        $imapPath = ($this->ssl)?'{' . $this->url .':' . $this->port . '/' . $this->protocol . '/ssl}INBOX' : '{' . $this->url .':' . $this->port . '/' . $this->protocol . 'ssl}INBOX';
        $this->mailbox = new ImapMailbox($imapPath, $this->email, $this->password);
        return $this;
    }
    
    public function getMailbox()
    {
        return $this->mailbox;
    }
    
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }
    
    public function getProtocol()
    {
        return $this->protocol;
    }
    
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    
    public function getUrl()
    {
        return $this->url;
    }
    
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }
    
    public function getPort()
    {
        return $this->port;
    }
    
    public function setSsl($ssl)
    {
        $this->ssl = $ssl;
        return $this;
    }
    
    public function getSsl()
    {
        return $this->ssl;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
}
