<?php
$rootPath = dirname(__FILE__)."/../../..";
define("ROOT_PATH",$rootPath);
set_include_path($rootPath);

require $rootPath."/com/pettract/lib/Slim/Slim.php";

\Slim\Slim::registerAutoloader();

//create new Slim instance
$app = new \Slim\Slim();
include_once "$rootPath/com/pettract/api/pet.php";
include_once "$rootPath/com/pettract/api/owner.php";
include_once "$rootPath/com/pettract/api/photo.php";
include_once "$rootPath/com/pettract/api/pairs.php";
include_once "$rootPath/com/pettract/api/message.php";

$app->post('/testpost', 'testpost');
//************************************************************

$app->get("/", function ()
{
    $response = "{ 'greeting':'Ello!'}";
    echo json_encode($response);
});

function testpost()
{
    /*$request_body = file_get_contents('php://input');
    $json = json_decode($request_body, true);
    $userIdA = $json['connection']['userA'];
    $userIdB = $json['connection']['userB'];
    ...
    ...
    echo json_encode($response);*/
    echo "Test Post";
}

// run the Slim app
$app->run();