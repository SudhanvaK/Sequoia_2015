<?php
//require "Slim/Slim.php";
//include_once $_SERVER['DOCUMENT_ROOT']."/com/pettract/lib/Slim/Slim.php";
$projectLocation = '/Users/vishwanath.s/PhpstormProjects/pettract-api';

set_include_path($projectLocation);
require "com/pettract/lib/Slim/Slim.php";
//require "data/test/Test.php";

\Slim\Slim::registerAutoloader();

// create new Slim instance
$app = new \Slim\Slim();

$app->get('/get_user/:id', 'getUser');
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