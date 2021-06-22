<?php
namespace App\Database;

use mysqli;

trait dBConnect
{
function connect(){
    $servername = "192.168.96.1";
    $username = "user";
    $password = "test";
    $dbname = "myDb";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname,3306);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
}
