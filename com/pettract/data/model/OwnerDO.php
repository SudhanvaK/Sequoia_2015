<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class OwnerDO
{
    private $ownerId;
    private $ownerName;
    private $ownerPhone;
    private $ownerEmail;
    private $createdTime;

    
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    public function getOwnerName()
    {
        return $this->ownerName;
    }

    public function setOwnerPhone($ownerPhone)
    {
        $this->ownerPhone = $ownerPhone;
        return $this;
    }

    public function getOwnerPhone()
    {
        return $this->ownerPhone;
    }

    public function setOwnerEmail($ownerEmail)
    {
        $this->ownerEmail = $ownerEmail;
        return $this;
    }

    public function getOwnerEmail()
    {
        return $this->ownerEmail;
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