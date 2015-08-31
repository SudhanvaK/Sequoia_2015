<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";
include_once ROOT_PATH . "/com/pettract/data/model/PairsDO.php";
include_once ROOT_PATH."/com/pettract/api/action/Messages.php";


class Pairs extends Common
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

    public function getPairInfo($sourceId, $destId)
    {
        $db = new PettractDB();
        $dbh = $db->connect();

        $pairData = $dbh->query( "SELECT * FROM tbl_pairs where source_id = $destId and dest_id = $sourceId");


        foreach($pairData as $row)
        {
            $pairPresent = "Y";
        }

        return $pairPresent;

        //$connectionList = array();
    }




    public function postPhotoInfo(PairsDO $pairData)
    {
        $db = new PettractDB();
        $dbh = $db->connect();


        $pairSourceId = $pairData->getSourceId();
        $pairDestId = $pairData->getDestId();

        $pairFinalYN= $this->getPairInfo($pairSourceId,$pairDestId);

        if ($pairFinalYN == "Y")
        {
                $dbh->query("UPDATE tbl_pairs SET pair_final_yn = 'Y' WHERE source_id = '".$pairDestId."' and  dest_id = '".$pairSourceId."')");
                $messages = new Messages();
                $messages->insertMessages($pairSourceId,$pairDestId);
        }
        else {
            $dbh->query("INSERT INTO tbl_pairs(source_id,dest_id) VALUES ('" . $pairSourceId . "','" . $pairDestId . "')");
        }
        $g = new GenericMessage();
        $g->setMessage("Success");
        return $g;
    }

} 