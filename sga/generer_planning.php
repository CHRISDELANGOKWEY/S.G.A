<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/fonctions-lecture.php';
require_once __DIR__ . '/includes/fonctions-verification.php';
require_once __DIR__ . '/includes/fonctions-generation.php';

$salles = charger_salles(SALLES_FILE);
$promotions = charger_promotions(PROMOTIONS_FILE);
$cours = charger_cours(COURS_FILE);
$options = charger_options(OPTIONS_FILE);
global $creneaux;

$planning = generer_planning($salles, $promotions, $cours, $options, $creneaux);
file_put_contents(PLANNING_FILE, json_encode($planning, JSON_PRETTY_PRINT));

header('Location: modules/affichage/afficher-planning.php');
exit;
?>