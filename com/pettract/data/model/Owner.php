<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class Owner
{
    private $intOwnerId;
    private $strOwnerName;
    private $strOwnerPhone;

    
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
} 