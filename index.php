<?php
// Exemple simple de fuite mémoire en PHP

// Création d'un tableau de manière infinie
$data = [];
while (true) {
    $data[] = str_repeat("A", 1000000); // Ajout d'une chaîne de 1 million de caractères à chaque itération
    // On laisse le script tourner sans libérer la mémoire
}
?>
