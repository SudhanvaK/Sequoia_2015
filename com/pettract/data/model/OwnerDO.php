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
    private $intOwnerId;
    private $strOwnerName;
    private $strOwnerPhone;
    private $strOwnerEmail;
    private $CreatedTime;

    
    public function setOwnerId($intOwnerId)
    {
        $this->intOwnerId = $intOwnerId;
        return $this;
    }

    public function getOwnerId()
    {
        return $this->intOwnerId;
    }

    public function setOwnerName($strOwnerName)
    {
        $this->strOwnerName = $strOwnerName;
        return $this;
    }

    public function getOwnerName()
    {
        return $this->strOwnerName;
    }

    public function setOwnerPhone($strOwnerPhone)
    {
        $this->strOwnerPhone = $strOwnerPhone;
        return $this;
    }

    public function getOwnerPhone()
    {
        return $this->strOwnerPhone;
    }

    public function setOwnerEmail($strOwnerEmail)
    {
        $this->strOwnerEmail = $strOwnerEmail;
        return $this;
    }

    public function getOwnerEmail()
    {
        return $this->strOwnerEmail;
    }

    public function setCreatedTime($CreatedTime)
    {
        $this->CreatedTime = $CreatedTime;
        return $this;
    }

    public function getCreatedTime()
    {
        return $this->CreatedTime;
    }
} 