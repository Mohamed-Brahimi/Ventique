<?php

require_once 'Framework/Vue.php';
$antiques = [
    [
        'id' => '991',
        'nom' => 'titre Test 1',
        'description' => 'description Test 1',
        'utilisateur_id' => '1',
        'date' => '2017-12-31',
        'prix' => '12',
    ],
    [
        'id' => '992',
        'nom' => 'titre Test 2',
        'description' => 'description Test 2',
        'utilisateur_id' => '2',
        'date' => '2017-11-31',
        'prix' => '11'
    ]
];
$vue = new Vue('index', 'Antiques');
$vue->generer(['antiques' => $antiques]);

