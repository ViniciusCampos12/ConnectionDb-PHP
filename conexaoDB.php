<?php

//Pass the parameters to a variable
$localhost = "localhost";
$user = "root";
$password = "";
$database = "bd_teste";

//Soon after call the PDO and pass the data for connection
$pdo = new PDO("mysql:dbname=".$database."; host=". $localhost, $user, $password);

//Code to display error with connection
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Code to execute to query
$sql = $pdo->query("SELECT * FROM teste");

//repeat loop to display table data
    foreach($sql as $data){
        echo $data['idTeste']." ". $data['nomeUser'] . "</br>";
        //print_r($data);
}