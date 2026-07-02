<?php

function saveClient(){

    global $clients;

    do{

        $errors=[];

        $nom=saisie("Nom : ");

        required($nom,$errors,"Nom obligatoire","nom");

        $telephone=saisie("Téléphone : ");

        required($telephone,$errors,"Téléphone obligatoire","tel");

        unique($clients,$telephone,$errors,"Téléphone existe déjà","tel");

        $adresse=saisie("Adresse : ");

        showError($errors);

    }while(count($errors)!=0);

    $clients[]=[

        "nomPrenom"=>$nom,
        "tel"=>$telephone,
        "address"=>$adresse

    ];

}