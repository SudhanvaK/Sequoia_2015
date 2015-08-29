<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:08 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Pet.php";
include_once ROOT_PATH."/com/pettract/lib/Zumba/Util/JsonSerializer.php";
$app->get('/pet/:petId', 'getPet');
$app->get('/pet_count', 'getPetCount');


function getPetCount()
{
    //$response = "{ 'greeting':'Pets!'}";
    //echo json_encode($response);
    $p = new Pet();

    echo "Count=".$p->getPetCount();
}

function getPet($petId)
{
    $p = new Pet();
    $pet = $p->getPet($petId);

    $serializer = new Zumba\Util\JsonSerializer();
    $json = $serializer->serialize($pet);
    echo $json;
    return $json;
}