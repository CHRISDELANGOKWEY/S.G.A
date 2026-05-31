<?php
function charger_salles($fichier) {
    if (!file_exists($fichier)) return [];
    return json_decode(file_get_contents($fichier), true) ?: [];
}

function charger_promotions($fichier) {
    if (!file_exists($fichier)) return [];
    return json_decode(file_get_contents($fichier), true) ?: [];
}

function charger_cours($fichier) {
    if (!file_exists($fichier)) return [];
    return json_decode(file_get_contents($fichier), true) ?: [];
}

function charger_options($fichier) {
    if (!file_exists($fichier)) return [];
    return json_decode(file_get_contents($fichier), true) ?: [];
}
?>