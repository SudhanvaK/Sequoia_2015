<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";
include_once ROOT_PATH."/com/pettract/data/model/PetDO.php";
include_once ROOT_PATH."/com/pettract/api/action/Owner.php";
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
                ->setHealthChecked($row['pet_health_checked'])
                ->setName($row['pet_name'])
                ->setLastVerifiedBy($row['pet_last_verified_by'])
                ->setCreatedTime($row['created_time']);

            //->setOwnerInfo((new Owner())->getOwnerInfo($row['pet_owner_id']))

            $o = new OwnerDO();
            $ownerInfo = $o->getOwnerInfo($row['pet_owner_id']);
            $pet->setOwnerInfo($ownerInfo);

            $petList[] = $pet;

        }

        if(count($petList)==0)
        {
            $g = new GenericMessage();
            return $g->setMessage("No");
        }
        else
            return $petList[0];
    }

    public function getPets()
    {
        $db = new PettractDB();
        $dbh = $db->connect();

        $data = $dbh->query( "SELECT * FROM tbl_pets" );

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
                ->setHealthChecked($row['pet_health_checked'])
                ->setName($row['pet_name'])
                ->setLastVerifiedBy($row['pet_last_verified_by'])
                ->setCreatedTime($row['created_time']);

            $o = new OwnerDO();
            $ownerInfo = $o->getOwnerInfo($row['pet_owner_id']);
            $pet->setOwnerInfo($ownerInfo);

            $petList[] = $pet;

        }

        if(count($petList)==0)
        {
            $g=new GenericMessage();
            return $g->setMessage("No");
        }
        else
            return $petList;
    }

    public function addPetInfo(PetDO $pet)
    {
        $db = new PettractDB();
        $dbh = $db->connect();

        $query = "INSERT INTO tbl_pets(pet_category, pet_breed, pet_sex, pet_colour, pet_age, pet_location, pet_owner_id, pet_health_checked, pet_name)
            VALUES ('".$pet->getCategory()."','".$pet->getBreed()."','".$pet->getSex()."','".$pet->getColour()."','".$pet->getAge()."','".$pet->getLocation()."','".$pet->getOwnerInfo()->getOwnerId()."','".$pet->getHealthChecked()."','".$pet->getName()."')";

        //$dbh->exec($query);
    }
}