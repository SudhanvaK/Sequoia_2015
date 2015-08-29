<?php
/**
 * Created by PhpStorm.
 * User: vishwanath.s
 * Date: 29/08/15
 * Time: 4:08 PM
 */

$app->get("/pet", function ()
{
    $response = "{ 'greeting':'Pets!'}";
    echo json_encode($response);
});