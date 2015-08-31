<?php
/**
 * Created by PhpStorm.
 * User: Sudhanva K
 * Date: 29/08/15
 * Time: 4:08 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Messages.php";

$app->get("/message/:id", 'getMessage');

function getMessage($id)
{
    //$response = "{ 'greeting':'Pets!'}";
    //echo json_encode($response);
    $messages = new Messages();

    $messagesData = $messages->getMessage($id);

    $serializer = new Zumba\Util\JsonSerializer();
    $json = $serializer->serialize($messages);
    return $json;
};

