<?php
namespace App;

use App\Database\dBConnect;
use App\Traits\ApiMeta;
use App\Models\Omdbapi;

class Bone extends Common
{
use ApiMeta;

	public function execute($id = null)
	{
        $conn =   $this->dbCon();
        $this->metaId = $id;
        $api =   $this->executer();
        $Omdbapi =   new Omdbapi();
        $Omdbapi->api = $api ;
        $Omdbapi->conn =   $conn;
        $api =  $Omdbapi->OmdbapiMetaInserter();
	return  ['view' => 'Bone', 'data' => $api ];
	}
}
