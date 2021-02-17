<?php
require_once 'connection.php';

if(isset($_POST['vote'])){
    $sql = $pdo->prepare("INSERT INTO votes (vote,fname,lname,email) VALUES (:vote,:fname,:lname,:email)");
    $sql->bindParam(':vote', $_POST['vote'], PDO::PARAM_INT);
    $sql->bindParam(':fname', $_POST['firstname'], PDO::PARAM_STR);
    $sql->bindParam(':lname', $_POST['lastname'], PDO::PARAM_STR);
    $sql->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    if($sql->execute()){
        echo 1;
    }else{
        echo 1;
    }
}else{
    echo 0;
}