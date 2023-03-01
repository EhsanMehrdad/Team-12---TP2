<?php
  /*  $dbname     = "u_210071946_db";
    $servername = "localhost";
    $username   = "u-210071946";
    $password   = "rQKLO9BvbfqmuK0";
    try {
        $db = new PDO("mysql:dbname=$dbname;host=$servername;", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "helll";
    } catch(PDOException $e) {
        echo $e->getMessage();
        exit;
    }*/

try{
//$db=new PDO("mysql:dbname=u_210071946_db;host=localhost", "u-210071946","rQKLO9BvbfqmuK0");
$db=new PDO("mysql:dbname=astoncv;host=localhost", "root","");

} catch (PDOException $ex) { 
    ?>
    <p>Sorry,  a database error occurred.</p>
    <p> Error details: <em> <?= $ex->getMessage() ?> </em></p>
    <?php
    }
?>
