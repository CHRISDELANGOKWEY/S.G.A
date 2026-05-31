SGA - Système de Gestion des Auditoires

Auteurs

Ngokwey hombo chrisdela
peter Description Génération automatique de planning pour les cours (L1 à L4) avec gestion des salles, capacités et options.
Fonctionnalités

Lecture des données depuis fichiers JSON
Vérification des contraintes (capacité, conflits)
Génération automatique du planning
Sauvegarde dans planning.json
Affichage HTML Installation
Copier le dossier dans C:\laragon\www\sga
Démarrer Laragon
Accéder à http://localhost/sga/index.php
Structure

data/ : fichiers JSON (salles, promotions, cours, options)
includes/ : fonctions PHP (lecture, vérification, génération)
modules/ : pages d’affichage
