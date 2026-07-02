<?php

function genererReference($products){

    $taille=count($products)+1;

    if($taille<=9){
        return "REF00".$taille;
    }

    if($taille<=99){
        return "REF0".$taille;
    }

    return "REF".$taille;

}

function getProductByLibele($products,$libelle){

    foreach($products as $index=>$product){

        if($product["libele"]==$libelle){

            return $index;

        }

    }

    return -1;

}

function supprimerProduit($index,&$products){

    return array_splice($products,$index,1)[0];

}

function listerProduits($products){

    foreach($products as $product){

        echo $product["libele"]."\n";

    }

}