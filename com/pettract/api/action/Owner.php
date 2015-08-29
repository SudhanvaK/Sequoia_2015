<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";
include_once ROOT_PATH . "/com/pettract/data/model/OwnerDO.php";

class Owner extends Common
{
    private $dbh;
    private $db;

    public function __construct()
    {
        require_once ROOT_PATH."/com/pettract/data/db/PettractDB.php";
    }

    private function connect()
    {
        $this->db = new PettractDB();
        $this->dbh = $this->db->connect();
    }

    public function getOwnerInfo($id)
    {
        $db = new PettractDB();
        $dbh = $db->connect();
        $ownerInfo = new OwnerDO();

        $ownerData = $dbh->query( "SELECT * FROM tbl_owner where owner_id = $id" );

        foreach($ownerData as $row)
        {
            $ownerInfo->setOwnerId($row['owner_id'])
                ->setOwnerName($row['owner_name'])
                ->setOwnerPhone($row['owner_phone'])
                ->setOwnerEmail($row['owner_email'])
                ->setCreatedTime($row['created_time']);
        }

        return $ownerInfo;

        //$connectionList = array();

    }


    public function postOwnerInfo(OwnerDO $ownerData)
    {
        $db = new PettractDB();
        $dbh = $db->connect();


        $ownerName = $ownerData->getOwnerName();
        $ownerPhone = $ownerData->getOwnerPhone();
        $ownerEmail = $ownerData->getOwnerEmail();

        $dbh->query( "INSERT INTO tbl_owner(owner_name,owner_phone,owner_email) VALUES ('".$ownerName."','".$ownerPhone."','".$ownerEmail."')");

        $g = new GenericMessage();
        $g->setMessage("Success");
        return $g;
    }
} 