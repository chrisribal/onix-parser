<?php

namespace Ribal\Onix\Message\Header;

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
     * Message Adressee
     *
     * @var Adressee
     */
    protected Addressee $Addressee;

    /**
     * Message number
     *
     * @var string
     */
    protected $MessageNumber;

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
     * Get Sender
     *
     * @return Sender
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * Set Adressee
     *
     * @param Adressee $adressee
     * @return void
     */
    public function setAddressee(Addressee $addressee)
    {
        $this->Addressee = $addressee;
    }

    /**
     * Get Adressee
     *
     * @return Adressee
     */
    public function getAddressee()
    {
        return $this->Addressee;
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
     * Get MessageNumber
     *
     * @return string
     */
    public function getMessageNumber()
    {
        return $this->MessageNumber;
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
     * Get SentDateTime
     *
     * @return Date
     */
    public function getSentDateTime()
    {
        return $this->SentDateTime;
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
     * Get MessageNote
     *
     * @return string
     */
    public function getMessageNote()
    {
        return $this->MessageNote;
    }

}
