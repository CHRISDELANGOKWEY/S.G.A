<?php
function salle_disponible($planning, $salle_id, $creneau) {
    foreach ($planning as $p) {
        if ($p['salle'] === $salle_id && $p['jour'] === $creneau['jour'] && $p['heure_debut'] === $creneau['debut']) {
            return false;
        }
    }
    return true;
}

function capacite_suffisante($salles, $salle_id, $effectif) {
    foreach ($salles as $s) {
        if ($s['id'] === $salle_id) {
            return $s['capacite'] >= $effectif;
        }
    }
    return false;
}

function groupe_disponible($planning, $groupe_id, $creneau) {
    foreach ($planning as $p) {
        if ($p['groupe'] === $groupe_id && $p['jour'] === $creneau['jour'] && $p['heure_debut'] === $creneau['debut']) {
            return false;
        }
    }
    return true;
}
?>