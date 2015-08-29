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

//function addPetInfo()
//$app->post('/addpet',"addPetInfo");

$app->post('/addpet',function() use ($app)
//function addPetInfo()
{
    $request_body = $app->request->getBody();
    $json = json_decode($request_body, true);

    $category = $json['pet_info']['category'];
    $breed =  $json['pet_info']['breed'];
    $sex =  $json['pet_info']['sex'];
    $colour =  $json['pet_info']['colour'];
    $age =  $json['pet_info']['age'];
    $location =  $json['pet_info']['location'];
    $ownerId =  $json['pet_info']['owner_id'];
    $healthChecked =  $json['pet_info']['health_checked'];
    $name =  $json['pet_info']['name'];

    $pet = new PetDO();
    $pet->setCategory($category)
        ->setBreed($breed)
        ->setSex($sex)
        ->setColour($colour)
        ->setAge($age)
        ->setLocation($location)
        ->setOwnerInfo((new OwnerDO())->setOwnerId($ownerId))
        ->setHealthChecked($healthChecked)
        ->setName($name);

    $p = new Pet();
    var_dump($pet);
    $p->addPetInfo($pet);
});