<?php

class getArraySERVER
{
    public static function getArraySERVERs(){
        echo '--==SERVER==--';
        foreach ($_SERVER as $k=>$v){
            echo "\n";
            echo $k.'='.$v;
        }
    }
}

?>