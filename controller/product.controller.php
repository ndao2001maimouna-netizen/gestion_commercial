<?php

function saveProduct(){

    global $products;

    do{

        $errors=[];

        $libelle=saisie("Libellé : ");

        required($libelle,$errors,"Le libellé est obligatoire");

        unique($products,$libelle,$errors,"Ce libellé existe déjà");

        showError($errors);

    }while(count($errors)!=0);

    $products[]=[
        "reference"=>genererReference($products),
        "libele"=>$libelle
    ];

}

function archiverProduit(){

    global $products , $productsArchived;

    $libelle=saisie("Libellé : ");

    $index=getProductByLibele($products,$libelle);

    if($index!=-1){

        $productsArchived[]=supprimerProduit($index,$products);

    }else{

        echo "Produit non trouvé\n";

    }

}