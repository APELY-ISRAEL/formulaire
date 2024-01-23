<?php 
$servername = "localhost";
$dbname = "personne";
$username = "root";
$password = "";

function connect ($servername, $dbname, $username, $password)
{
    $ren = "mysql:host=$servername;dbname=$dbname;charset=UTF8";
try{
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        return new PDO($ren, $username, $password, $options);
    }
       catch (PDOException $e){
        die($e->getMessage());
        
       }    
}   
    return connect($servername, $dbname ,$username, $password);
?>