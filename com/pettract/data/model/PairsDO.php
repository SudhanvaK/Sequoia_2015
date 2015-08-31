<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 14/06/14
 * Time: 12:24 AM
 */

//namespace data\card_data;


class PairsDO
{
    private $pairId;
    private $sourceId;
    private $destId;
    private $pairFinalYn;
    private $createdTime;


    public function setPairId($pairId)
    {
        $this->pairId = $pairId;
        return $this;
    }

    public function getPairId()
    {
        return $this->pairId;
    }

    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    public function setDestId($destId)
    {
        $this->destId = $destId;
        return $this;
    }

    public function getDestId()
    {
        return $this->destId;
    }

    public function setPairFinalYn($pairFinalYn)
    {
        $this->pairFinalYn = $pairFinalYn;
        return $this;
    }

    public function getPairFinalYn()
    {
        return $this->pairFinalYn;
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