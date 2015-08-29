<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class PetDO
{
    private $id;
    private $category;
    private $breed;
    private $sex;
    private $colour;
    private $age;
    private $location;
    private $ownerInfo;
    private $healthChecked;
    private $name;
    private $lastVerifiedBy; //TODO: Vet Data Binding
    private $createdTime;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setCategory($category)
    {
        $this->category=$category;
        return $this;
    }

    public function setBreed($breed)
    {
        $this->breed=$breed;
        return $this;
    }

    public function setSex($sex)
    {
        $this->sex=$sex;
        return $this;
    }

    public function setColour($colour)
    {
        $this->colour=$colour;
        return $this;
    }

    public function setAge($age)
    {
        $this->age=$age;
        return $this;
    }

    public function setLocation($location)
    {
        $this->location=$location;
        return $this;
    }

    public function setOwnerInfo($ownerInfo)
    {
        $this->ownerInfo=$ownerInfo;
        return $this;
    }

    public function setHealthChecked($healthChecked)
    {
        $this->healthChecked=$healthChecked;
        return $this;
    }

    public function setName($name)
    {
        $this->name=$name;
        return $this;
    }

    public function setLastVerifiedBy($lastVerifiedBy)
    {
        $this->lastVerifiedBy=$lastVerifiedBy;

        return $this;
    }

    public function setCreatedTime($createdTime)
    {
        $this->createdTime=$createdTime;
        return $this;
    }



    ////////////////////////////////////////


    public function getId()
    {
        return $this->id;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getColour()
    {
        return $this->colour;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getOwnerInfo()
    {
        return $this->ownerInfo;
    }

    public function getHealthChecked()
    {
        return $this->healthChecked;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastVerifiedBy()
    {
        return $this->lastVerifiedBy;
    }

    public function getCreatedTime()
    {
        return $this->createdTime;
    }



} 