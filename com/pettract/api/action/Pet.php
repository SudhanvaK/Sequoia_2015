<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";

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

        $data = $dbh->query( 'SELECT * FROM tbl_pets' );

        //$connectionList = array();
        $petCount=0;
        foreach($data as $row)
        {
            //$row['firstname']
            $petCount++;
        }

        return $petCount;
    }
} 