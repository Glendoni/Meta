<?php
namespace App\Traits;

use App\Helpers\StringHelper;
use App\Helpers\VidioApiHelper;

trait ApiMeta
{
    public  $metaId;

  use VidioApiHelper;

public function executer(){

    $path = [
        'Matrix%20Reloaded&apikey=720c3666',
        'Matrix%20Revolutions&apikey=720c3666',
        'Matrix&apikey=720c3666',
    ];

   $id  = $path[$this->metaId] ;

   return $this->getDetails($id);
}
}
