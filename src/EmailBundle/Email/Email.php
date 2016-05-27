<?php

namespace EmailBundle\Email;

use Doctrine\ORM\EntityManager;
use PhpImap\Mailbox as ImapMailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;

use EmailBundle\Email\EmailConnection;

class Email {
    
    protected $em;
    private $support;
    
    public function __construct(EntityManager $em, EmailConnection $support)
    {
        $this->em = $em;
        $this->support = $support;
    }
    
    public function getEmails()
    {
        $mailbox = $this->support->getMailbox();
        if($mailbox instanceof ImapMailbox){
            // Read all messaged into an array:
            $mailsIds = $mailbox->searchMailbox('ALL');
            if(!$mailsIds) {
                die('Mailbox is empty');
            }

            // Get the first message and save its attachment(s) to disk:
            $mail = $mailbox->getMail($mailsIds[1]);

            var_dump($mail);
            echo "\n\n\n\n\n";
            var_dump($mail->getAttachments());
        }
    }
}
