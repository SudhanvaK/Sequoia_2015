<?php
/**
 * Created by PhpStorm.
 * User: Sudhanva K
 * Date: 29/08/15
 * Time: 4:08 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Pairs.php";

//$app->get("/pairs/:id", 'getPairs');


//function getPairs($id)
//{
//    //$response = "{ 'greeting':'Pets!'}";
//    //echo json_encode($response);
//    $photo = new Photo();
//
//    $photoData = $photo->getPhoto($id);
//
//    $serializer = new Zumba\Util\JsonSerializer();
//    $json = $serializer->serialize($photoData);
//    var_dump($json);
//    return $json;
//};



$app->post('/addphoto',function() use ($app)
//function addPetInfo()
{
    $request_body = $app->request->getBody();
    $json = json_decode($request_body, true);

    $pairSourceId = $json['pair_info']['sourceId'];
    $pairDestId =  $json['pair_info']['destId'];

    $pairsdo = new PairsDO();
    $pairsdo->setSourceId($pairSourceId)
        ->setDestId($pairDestId);

    $pairs = new Pairs();
    $pairs->postPhotoInfo($pairsdo);
});