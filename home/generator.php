<?php


$first = 'As-tu déjà fait l\'amour, aujourd\'hui ?' ;
$second = 'Je m\'embête, qu\'est-ce que tu fais ?';
$third = 'Tu serais pas un peu mannequin, par hasard ?';
$fourth = 'Envie d\'aller prendre un verre, en fin de journée ?';
$fifth = 'J\'ai toujours eu envie de me marier sans le dire à personne, qu\'est-ce que t\'en dis ?';
$sixth = 'Comment se passe ta journée/soirée, jusque là ?';
$seventh = 'Je suis fatigué de moi-même, ça te dit d\'aller prendre un verre ?';
$eigth = 'Il y a des films pas trop mal au ciné, en ce moment, ça te tente ?';
$nineth = 'Je te préviens : je suis pas du genre à coucher dès le premier soir.';
$tenth = 'T\'as beau être magnifique, tu ne m\'intimides pas.';

$array = array($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eigth, $nineth, $tenth);
for ($i=0; $i<1; $i++) {
    echo $array[rand(0, count($array) - 1)] . "\n";
}

?>