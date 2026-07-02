<?php

function saisie($message){
    return readline($message);
}

function required($value,&$errors,$message,$field="libele"){
    if(empty($value)){
        $errors[$field]["required"]=$message;
    }
}

function unique($datas,$value,&$errors,$message,$key="libele"){
    foreach($datas as $data){
        if($data[$key]===$value){
            $errors[$key]["unique"]=$message;
        }
    }
}