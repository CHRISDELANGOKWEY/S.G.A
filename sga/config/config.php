<?php
define('DATA_PATH', __DIR__ . '/../data/');
define('SALLES_FILE', DATA_PATH . 'salles.json');
define('PROMOTIONS_FILE', DATA_PATH . 'promotions.json');
define('COURS_FILE', DATA_PATH . 'cours.json');
define('OPTIONS_FILE', DATA_PATH . 'options.json');
define('PLANNING_FILE', DATA_PATH . 'planning.json');

$creneaux = [
    ['jour' => 'Lundi', 'debut' => '08:00', 'fin' => '12:00'],
    ['jour' => 'Lundi', 'debut' => '13:00', 'fin' => '17:00'],
    ['jour' => 'Mardi', 'debut' => '08:00', 'fin' => '12:00'],
    ['jour' => 'Mardi', 'debut' => '13:00', 'fin' => '17:00'],
    ['jour' => 'Mercredi', 'debut' => '08:00', 'fin' => '12:00'],
    ['jour' => 'Mercredi', 'debut' => '13:00', 'fin' => '17:00'],
    ['jour' => 'Jeudi', 'debut' => '08:00', 'fin' => '12:00'],
    ['jour' => 'Jeudi', 'debut' => '13:00', 'fin' => '17:00'],
    ['jour' => 'Vendredi', 'debut' => '08:00', 'fin' => '12:00'],
    ['jour' => 'Vendredi', 'debut' => '13:00', 'fin' => '17:00']
];
?>