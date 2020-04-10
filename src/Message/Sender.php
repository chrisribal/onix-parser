<?php

namespace Ribal\Onix\Message;

use Ribal\Onix\XmlIterator;

class Sender
{

    /**
     * Name of the sender, e.g. organization
     *
     * @var string
     */
    protected $SenderName;

    /**
     * Name of the primary sender contact,
     * e.g. first name / last name
     *
     * @var string
     */
    protected $ContactName;

    /**
     * E-Mail address of the sender
     *
     * @var string
     */
    protected $EmailAddress;

    /**
     * Set the senders organizational name
     *
     * @param string $senderName
     * @return void
     */
    public function setSenderName(string $senderName)
    {
        $this->SenderName = $senderName;
    }

    /**
     * Set the sender's contact name
     *
     * @param string $contactName
     * @return void
     */
    public function setContactName(string $contactName)
    {
        $this->ContactName = $contactName;
    }

    /**
     * Set the senders email address
     *
     * @param string $emailAddress
     * @return void
     */
    public function setEmailAddress(string $emailAddress)
    {
        $this->EmailAddress = $emailAddress;
    }

}