<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class Photo
{
    private $intPhotoId;
    private $intPetId;
    private $strPhotoUrl;
    private $CreatedTime;

    
    public function setPhotoId($intPhotoId)
    {
        $this->intPhotoId = $intPhotoId;
        return $this;
    }

    public function getPhotoId()
    {
        return $this->intPhotoId;
    }

    public function setPetId($intPetId)
    {
        $this->intPetId = $intPetId;
        return $this;
    }

    public function getPetId()
    {
        return $this->intPetId;
    }

    public function setPhotoUrl($strPhotoUrl)
    {
        $this->strPhotoUrl = $strPhotoUrl;
        return $this;
    }

    public function getPhotoUrl()
    {
        return $this->strPhotoUrl;
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