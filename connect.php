<?php

try{
    //define('username', 'root');
    //define('password', '1234');
    $db_con= new PDO('mysql:host=localhost;dbname=postkodi','root','12345');
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
   //echo'succssesiful';
}catch(PDOException $ex){
    die('connection fail'.$ex->getMessage());
}
?>
