<?php
session_start();
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    if(isset($_SESSION['auth']))
    {
        require_once($_SERVER['DOCUMENT_ROOT']."https://cs2410-web01pvm.aston.ac.uk:10000/virtual-server/edit_database.cgi?dom=16447632511994488&name=u_200219998_db&type=mysql");
        require_once("scripts/GetUid.php");
        foreach($_SESSION['cart'] as $key => $quantity)
        {
        for($i=0;$i<$quantity;$i++)
        {
            $pid=intval($key);
            $query = "INSERT INTO orders (uid, pid) VALUES (:uid, :pid)";
            $sth = $db->prepare($query);
            $sth->bindParam(':uid', $uid);
            $sth->bindParam(':pid', $pid);
            $sth->execute();
        }
        // DECREMENT stock for pid in products table
        $query = "UPDATE products SET stock = stock - 1 WHERE pid=:pid";
        $sth = $db->prepare($query);
        $sth->bindParam(':pid', $pid);
        $sth->execute();

        // INCREMENT bought_all_time for pid in products table
        $query = "UPDATE products SET bought_all_time = bought_all_time + 1 WHERE pid=:pid";
        $sth = $db->prepare($query);
        $sth->bindParam(':pid', $pid);
        $sth->execute();
    }
    unset($_SESSION['cart'][$key]);
    $_SESSION['info']['success'] = true;
    $_SESSION['info']['notification'] = "Thank you for your purchase.";
    }


?>