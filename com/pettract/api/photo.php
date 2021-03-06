<?php
/**
 * Created by PhpStorm.
 * User: Sudhanva K
 * Date: 29/08/15
 * Time: 4:08 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Photo.php";

$app->get("/photo/:id", 'getPhoto');
$app->get("/photos/:id", 'getPhotos');
//$app->post("/createphoto/:photodata", 'postPhoto');


function getPhoto($id)
{
    //$response = "{ 'greeting':'Pets!'}";
    //echo json_encode($response);
    $photo = new Photo();

    $photoData = $photo->getPhoto($id);

    $serializer = new Zumba\Util\JsonSerializer();
    $json = $serializer->serialize($photoData);
    var_dump($json);
    return $json;
};


function getPhotos($id)
{
    //$response = "{ 'greeting':'Pets!'}";
    //echo json_encode($response);
    $photos = new Photo();

    $photosData = $photos->getPhotos($id);

    $serializer = new Zumba\Util\JsonSerializer();
    $json = $serializer->serialize($photosData);
    var_dump($json);
    return $json;
};


//function postPhoto($photodata){
//    $photo = new Photo();
//
//    $result = $photo->postPhotoInfo($photodata);
//
//    $serializer = new Zumba\Util\JsonSerializer();
//    $json = $serializer->serialize($result);
//    return $json;
//}


$app->post('/addphoto',function() use ($app)
//function addPetInfo()
{
    $request_body = $app->request->getBody();
    $json = json_decode($request_body, true);

    $photoPetId = $json['photo_info']['photoPetId'];
    $photoUrl =  $json['photo_info']['photoUrl'];

    $photodo = new PhotoDO();
    $photodo->setPetId($photoPetId)
        ->setPhotoUrl($photoUrl);

    $photo = new Photo();
    var_dump($photodo);
    $photo->postPhotoInfo($photodo);
});