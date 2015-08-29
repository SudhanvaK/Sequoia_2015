<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:08 PM
 */
include_once ROOT_PATH."/com/pettract/api/action/Pet.php";

$app->get("/pet", function ()
{
    //$response = "{ 'greeting':'Pets!'}";
    //echo json_encode($response);
    $p = new Pet();

    echo "Count=".$p->getPetCount();
});