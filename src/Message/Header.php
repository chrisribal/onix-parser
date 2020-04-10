<?php

namespace Ribal\Onix\Message;

use Ribal\Onix\Date;

class Header
{

    /**
     * Message Sender
     *
     * @var Sender $sender
     */
    protected $Sender;

    /**
     * Message Date
     *
     * @var Date
     */
    protected $SentDateTime;

    /**
     * MessageNote
     *
     * @var string
     */
    protected $MessageNote;

    /**
     * Message number
     *
     * @var string
     */
    protected $MessageNumber;

    /**
     * Set Sender
     *
     * @param Sender $sender
     * @return void
     */
    public function setSender(Sender $sender)
    {
        $this->Sender = $sender;
    }

    /**
     * Set SentDateTime
     *
     * @param Date $SentDateTime
     * @return void
     */
    public function setSentDateTime(Date $SentDateTime)
    {
        $this->SentDateTime = $SentDateTime;
    }

    /**
     * Set MessageNote
     *
     * @param string $messageNote
     * @return void
     */
    public function setMessageNote(string $messageNote)
    {
        $this->MessageNote = $messageNote;
    }

    /**
     * Set MessageNumber
     *
     * @param string $messageNumber
     * @return void
     */
    public function setMessageNumber(string $messageNumber)
    {
        $this->MessageNumber = $messageNumber;
    }

    /**
     * Get Sender
     *
     * @return Sender
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * Get SentDateTime
     *
     * @return Date
     */
    public function getSentDateTime()
    {
        return $this->SentDateTime;
    }

    /**
     * Get MessageNote
     *
     * @return string
     */
    public function getMessageNote()
    {
        return $this->MessageNote;
    }

    /**
     * Get MessageNumber
     *
     * @return string
     */
    public function getMessageNumber()
    {
        return $this->MessageNumber;
    }

}
