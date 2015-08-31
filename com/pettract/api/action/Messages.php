<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";
include_once ROOT_PATH . "/com/pettract/data/model/MessagesDO.php";
include_once ROOT_PATH."/com/pettract/api/action/Pet.php";
include_once ROOT_PATH."/com/pettract/api/action/Owner.php";

class Messages extends Common
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

    public function getMessage($id){
        $db = new PettractDB();
        $dbh = $db->connect();
        $message = new MessagesDO();

        $photoData = $dbh->query( "SELECT * FROM tbl_msgs where owner1_id = $id OR owner2_id = $id" );


        foreach($photoData as $row)
        {
            $message->setMsgId($row['msg_id'])
                    ->setOwner1Id($row['owner1_id'])
                    ->setOwner2Id($row['owner2_id'])
                    ->setPet1Id($row['pet1_id'])
                    ->setPet2Id($row['pet2_id'])
                    ->setOwnerMessage($row['owner_message']);
        }

        return $message;
    }

    public function insertMessages($sourceId, $destId)
    {
        $db = new PettractDB();
        $dbh = $db->connect();

        $Owner1Pet1Data = $dbh->query( "SELECT A.pet_id,B.owner_id,A.pet_name,B.owner_name FROM tbl_pets A INNER JOIN tbl_owner B ON A.pet_owner_id = B.owner_id WHERE A.pet_id = $sourceId");


        foreach($Owner1Pet1Data as $row)
        {
            $Pet1Id = $row['pet_id'];
            $Owner1Id = $row['owner_id'];
            $Pet1Name = $row['pet_name'];
            $Owner1Name = $row['owner_name'];
        }


        $Owner2Pet2Data = $dbh->query( "SELECT A.pet_id,B.owner_id,A.pet_name,B.owner_name FROM tbl_pets A INNER JOIN tbl_owner B ON A.pet_owner_id = B.owner_id WHERE A.pet_id = $destId");


        foreach($Owner2Pet2Data as $row)
        {
            $Pet2Id = $row['pet_id'];
            $Owner2Id = $row['owner_id'];
            $Pet2Name = $row['pet_name'];
            $Owner2Name = $row['owner_name'];
        }

        $OwnerMessage = $Owner1Name."'s ".$Pet1Name." and ".$Owner2Name."'s ".$Pet2Name." have liked each other.";
        $dbh->query("INSERT INTO tbl_msgs(owner1_id,pet1_id,owner2_id,pet2_id,owner_message) VALUES ('".$Owner1Id."','".$Pet1Id."','".$Owner2Id."','".$Pet2Id."','".$OwnerMessage."')");

        $g = new GenericMessage();
        $g->setMessage("Success");
        return $g;
        //$connectionList = array();
    }



} 