<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class Pet
{
    private $id;
    private $category;
    private $breed;
    private $sex;
    private $colour;
    private $age;
    private $location;
    private $ownerId;
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

    public function setOwnerId($ownerId)
    {
        $this->ownerId=$ownerId;
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
        $this->$lastVerifiedBy=$lastVerifiedBy;
        return $this;
    }

    public function setCreatedTime($createdTime)
    {
        $this->$createdTime=$createdTime;
        return $this;
    }
} 