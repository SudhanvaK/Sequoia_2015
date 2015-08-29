<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";
include_once ROOT_PATH."/com/pettract/data/model/PetDO.php";
include_once ROOT_PATH."/com/pettract/api/action/GenericMessage.php";

class Pet extends Common
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

    public function getPetCount()
    {
        $db = new PettractDB();
        $dbh = $db->connect();

        //$data = $dbh->query( "SELECT COUNT(*) as 'PetCount' FROM tbl_pets" );

        $query = $dbh->prepare("SELECT COUNT(*) as 'PetCount' FROM tbl_pets");
        $query->execute();
        $row = $query->fetch();

        return $row['PetCount'];
    }

    public function getPet($petId)
    {
        $db = new PettractDB();
        $dbh = $db->connect();

        $data = $dbh->query( "SELECT * FROM tbl_pets WHERE pet_id=$petId" );

        //$data = $dbh->query( 'SELECT * FROM user WHERE id in (SELECT c.userB FROM connection c WHERE c.userA='.$this->currentUser->getId().')' );

        $petList = array();

        foreach($data as $row)
        {
            $pet = new PetDO();
            $pet->setId($row['pet_id'])
                ->setCategory($row['pet_category'])
                ->setBreed($row['pet_breed'])
                ->setSex($row['pet_sex'])
                ->setColour($row['pet_colour'])
                ->setAge($row['pet_age'])
                ->setLocation($row['pet_location'])
                ->setOwnerId($row['pet_owner_id'])
                ->setHealthChecked($row['pet_health_checked'])
                ->setName($row['pet_name'])
                ->setLastVerifiedBy($row['pet_last_verified_by'])
                ->setCreatedTime($row['created_time']);

            $petList[] = $pet;

        }

        if(count($petList)==0)
            return (new GenericMessage())->setMessage("No");
        else
            return $petList[0];
    }
} 