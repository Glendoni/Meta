<?php
namespace App;
use App\Database\dBConnect;
use mysqli;

class Common
{
    use dBConnect;
function dbCon(){
return $this->connect();
}
}
