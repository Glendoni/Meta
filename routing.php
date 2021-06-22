<?php
    switch ($url) {
        case "Main":
          $res = (new App\Main)->execute();
            break;
        case "Bone":
            $res = (new App\Bone)->execute(0);
            break;
        case "Btwo":
            $res = (new App\Bone)->execute(1);
            break;
        case "Bthree":
            $res = (new App\Bone)->execute(2);
            break;
        default:
            echo "";
    }

    require('view/' . $res['view'] . '.php');




