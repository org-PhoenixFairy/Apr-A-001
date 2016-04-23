<?php

class getArraySERVER
{
    public static function getArraySERVERs(){
        foreach ($_SERVER as $k=>$v){
            echo '--==SERVER==--';
            echo $k.'='.$v.'\n';
        }
    }
}

?>