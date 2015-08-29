<?php
/**
 * Created by JetBrains PhpStorm.
 * User: vishwanath
 * Date: 5/14/14
 * Time: 1:49 AM
 * To change this template use File | Settings | File Templates.
 */
class PettractDB
{
    private $dbh;

    function __construct()
    {}

    function connect()
    {
        //include_once dirname(__FILE__) . '/../../config/dbconfig.php';
        include_once ROOT_PATH."/com/pettract/config/Constants.php";

        try
        {
            echo "Connecting to DB";
            $dbh = new PDO("mysql:host=".MYSQL_HOST.";dbname=".DATABASE, MYSQL_USERNAME, MYSQL_PASSWORD);
            echo "Connected";

            /* set the PDO error mode to exception */
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $dbh;
        }
        catch(PDOException $e)
        {
            echo "Database Connection Error: ".$e->getMessage()."\n\n";
        }
    }
}
