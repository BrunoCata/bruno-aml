<?php
    function conexao(){
        
        $conn = new PDO('mysql:host=localhost;dbname=dbphp7;charset=utf8', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
      
        return $conn;
    }
?>