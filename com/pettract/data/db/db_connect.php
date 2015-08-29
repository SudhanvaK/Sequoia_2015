<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vishwanath
 * Date: 5/14/14
 * Time: 1:49 AM
 * To change this template use File | Settings | File Templates.
 */
class MeetDB
{
    private $dbh;

    function __construct()
    {}

    function connect()
    {
        include_once dirname(__FILE__) . '/../../config/dbconfig.php';
        try
        {
            $dbh = new PDO("mysql:host=".MYSQL_HOST.";dbname=".DATABASE, MYSQL_USERNAME, MYSQL_PASSWORD);
            //success response?

            /* set the PDO error mode to exception */
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbh;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
