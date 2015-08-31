<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class MessagesDO
{
    private $msgId;
    private $owner1Id;
    private $pet1Id;
    private $ownerMessage;
    private $owner2Id;
    private $pet2Id;
    private $createdTime;


    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
        return $this;
    }

    public function getMsgId()
    {
        return $this->msgId;
    }

    public function setOwner1Id($owner1Id)
    {
        $this->owner1Id = $owner1Id;
        return $this;
    }

    public function getOwner1Id()
    {
        return $this->owner1Id;
    }

    public function setPet1Id($pet1Id)
    {
        $this->pet1Id = $pet1Id;
        return $this;
    }

    public function getPet1Id()
    {
        return $this->pet1Id;
    }

    public function setOwner1Message($owner1Message)
    {
        $this->owner1Message = $owner1Message;
        return $this;
    }

    public function getOwner2Id()
    {
        return $this->owner2Id;
    }

    public function setPet2Id($pet2Id)
    {
        $this->pet2Id = $pet2Id;
        return $this;
    }

    public function getPet2Id()
    {
        return $this->pet2Id;
    }

    public function setOwnerMessage($ownerMessage)
    {
        $this->ownerMessage = $ownerMessage;
        return $this;
    }

    public function getOwnerMessage()
    {
        return $this->ownerMessage;
    }


    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    public function getCreatedTime()
    {
        return $this->createdTime;
    }
} 