<?php

function showError($errors){

    foreach($errors as $errorField){

        foreach($errorField as $error){

            echo $error."\n";

        }

    }

}