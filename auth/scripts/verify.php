<?php
session_start();
if(isset($_GET['token']))
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/auth/scripts/db.php');
    $query = 'SELECT verification_token, verified FROM user WHERE verification_token=:token';
    $sth = $db->prepare($query);
    $sth->bindParam(':token', $_GET['token']);
    $sth->execute();
    if($sth->rowCount() == 0)
        echo "<h1>This is an invalid link. Go <a href=\"index.php\">home</a>.</h1>";
    else
    {
        $row= $sth->fetchColumn();
        if($row['verified'] == TRUE)
            echo "<h1>This account has been verified through this link already. Go <a href=\"index.php\">home</a>.</h1>";
        else
        {
            $query = 'UPDATE users SET verified=TRUE WHERE verification_token=:token';
            $sth = $db->prepare($query);
            $sth->bindParam(':token', $_GET['token']);
            $sth->execute();
            echo "<h1>Congratulations. Please <a href=\"/auth/login.php\">login</a> with your verified account.</h1>";
        }
    }
}
else
    echo "<p>Please check your inbox (and spam folder) for the email verification link. Go <a href=\"/index.php\">home</a>.</p>";
?>
