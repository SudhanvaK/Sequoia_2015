<?php
/**
 * Created by PhpStorm.
 * User: Sudhanva K
 * Date: 29/08/15
 * Time: 4:08 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Owner.php";

$app->get("/ownerinfo/:id", 'getOwner');


function getOwner($id)
{
    //$response = "{ 'greeting':'Pets!'}";
    //echo json_encode($response);
    $owner = new Owner();

    $ownerData = $owner->getOwnerInfo($id);

    $serializer = new Zumba\Util\JsonSerializer();
    $json = $serializer->serialize($ownerData);
    var_dump($json);
    return $json;
};

//function postOwner($ownerdata){
//    $owner = new Owner();
//
//    $result = $owner->postOwnerInfo($ownerdata);
//
//    $serializer = new Zumba\Util\JsonSerializer();
//    $json = $serializer->serialize($result);
//    return $json;
//}


$app->post('/addowner',function() use ($app)
//function addPetInfo()
{
    $request_body = $app->request->getBody();
    $json = json_decode($request_body, true);

    $ownerName = $json['owner_info']['ownerName'];
    $ownerPhone =  $json['owner_info']['ownerPhone'];
    $ownerEmail =  $json['owner_info']['ownerEmail'];

    $ownerdo = new OwnerDO();
    $ownerdo->setOwnerName($ownerName)
        ->setOwnerPhone($ownerPhone)
        ->setOwnerEmail($ownerEmail);

    $owner = new Owner();
    var_dump($ownerdo);
    $owner->postOwnerInfo($ownerdo);
});