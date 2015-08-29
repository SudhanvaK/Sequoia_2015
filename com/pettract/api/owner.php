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
    return $json;
};