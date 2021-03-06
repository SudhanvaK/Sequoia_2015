<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:42 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Common.php";
include_once ROOT_PATH . "/com/pettract/data/model/PhotoDO.php";

class Photo extends Common
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

    public function getPhoto($id)
    {
        $db = new PettractDB();
        $dbh = $db->connect();
        $photo = new PhotoDO();

        $photoData = $dbh->query( "SELECT * FROM tbl_photos where photo_id = $id" );


        foreach($photoData as $row)
        {
            $photo->setPhotoId($row['photo_id'])->setPetId($row['pet_id'])->setPhotoUrl($row['photo_url']);
        }

        return $photo;

        //$connectionList = array();
    }


    public function getPhotos($id)
    {
        $db = new PettractDB();
        $dbh = $db->connect();
        $photos = array();


        $photoData = $dbh->query( "SELECT * FROM tbl_photos where pet_id = $id" );

        foreach($photoData as $row)
        {
            $photo = new PhotoDO();
            $photo->setPhotoId($row['photo_id'])
                  ->setPetId($row['pet_id'])
                  ->setPhotoUrl($row['photo_url']);

            $photos[] = $photo;
        }

        return $photos;

        //$connectionList = array();
    }

    public function postPhotoInfo(PhotoDO $photoData)
    {
        $db = new PettractDB();
        $dbh = $db->connect();


        $photoPetId = $photoData->getPetId();
        $photoUrl = $photoData->getPhotoUrl();

        $dbh->query( "INSERT INTO tbl_photos(pet_id,photo_url) VALUES ('".$photoPetId."','".$photoUrl."')");

        $g = new GenericMessage();
        $g->setMessage("Success");
        return $g;
    }

} 