<?php
function generer_planning($salles, $promotions, $cours, $options, $creneaux) {
    $planning = [];
    $groupes = [];
    
    // Créer la liste des groupes avec leur effectif
    foreach ($promotions as $p) {
        $groupes[$p['id']] = ['type' => 'promotion', 'effectif' => $p['effectif']];
    }
    foreach ($options as $o) {
        $groupes[$o['id']] = ['type' => 'option', 'effectif' => $o['effectif']];
    }
    
    $index_creneau = 0;
    
    foreach ($cours as $c) {
        $groupe_id = $c['groupe'];
        $effectif = $groupes[$groupe_id]['effectif'];
        $place = false;
        
        // Chercher un créneau et une salle
        for ($i = $index_creneau; $i < count($creneaux) && !$place; $i++) {
            $creneau = $creneaux[$i];
            
            // Trier les salles par capacité croissante (la plus petite d'abord)
            usort($salles, function($a, $b) {
                return $a['capacite'] - $b['capacite'];
            });
            
            foreach ($salles as $s) {
                if (capacite_suffisante($salles, $s['id'], $effectif) &&
                    salle_disponible($planning, $s['id'], $creneau) &&
                    groupe_disponible($planning, $groupe_id, $creneau)) {
                    
                    $planning[] = [
                        'cours' => $c['intitule'],
                        'groupe' => $groupe_id,
                        'salle' => $s['id'],
                        'jour' => $creneau['jour'],
                        'heure_debut' => $creneau['debut'],
                        'heure_fin' => $creneau['fin']
                    ];
                    $index_creneau = $i + 1;
                    $place = true;
                    break;
                }
            }
        }
        
        if (!$place) {
            $planning[] = [
                'cours' => $c['intitule'],
                'groupe' => $groupe_id,
                'salle' => 'NON AFFECTÉ',
                'jour' => '-',
                'heure_debut' => '-',
                'heure_fin' => '-'
            ];
        }
    }
    
    return $planning;
}
?>