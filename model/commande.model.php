<?php

$commandes = [
    [
        'client'=>1,
        'date'=>'15/06/2026',
        'montant'=>0,
        'etat'=>'PAYER',
        'product'=>[
            ['quantite'=>7,'productIndex'=>0],
            ['quantite'=>3,'productIndex'=>1],
        ],
        'paiement'=>'reference1'
    ],

    [
        'client'=>1,
        'date'=>'16/06/2026',
        'montant'=>0,
        'etat'=>'IMPAYER',
        'product'=>[
            ['quantite'=>8,'productIndex'=>0],
            ['quantite'=>2,'productIndex'=>1],
        ],
        'paiement'=>null
    ]
];

$paiements = [
    [
        'date'=>'17/06/2026',
        'reference'=>'reference1',
        'facture'=>[
            'date'=>'15/06/2026',
            'reference'=>1
        ]
    ]
];