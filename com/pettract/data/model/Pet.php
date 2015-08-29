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
    private $line1;
    private $line2;
    private $city;
    private $state;
    private $country;
    private $pin;
    private $type;

    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLine1($line1)
    {
        $this->line1 = $line1;
    }

    public function getLine1()
    {
        return $this->line1;
    }

    public function setLine2($line2)
    {
        $this->line2 = $line2;
    }

    public function getLine2()
    {
        return $this->line2;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
} 