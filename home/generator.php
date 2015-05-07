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
$eleventh = 'J\'ai envie de m\'éclater la gueule, tu m\'accompagnes ?';
$twelfth = 'Bonjour, Mademoiselle.';
$thirteenth = 'Est-ce que t\'aurais du temps pour refaire le monde ?';
$fourteenth = 'Ce week-end on loue une moto/voiture et on se casse à la campagne, ça te dit ?';
$fifteenth = 'C\'est quoi ton poison ?';
$sixteenth = 'Ne sois pas timide, je ne te mangerai pas (tout de suite)';
$seventeenth = 'Viens on sort.';
$eighteenth = 'Je vais essayer de la jouer un peu intello : ça te tente une expo ?';
$nineteenth = 'Comment est votre blanquette ?';
$twentieth = 'Ca fait combien de temps que t\'es pas allée au zoo ?';
$twentyfirst = 'Allez viens j\'t\'emmène au vent !'; 
$twentysecond = 'T\'es plutôt chien ou plutôt chat ? (La suite de la conversation dépend entièrement de ta réponse)';
$twentythird = 'Dis-moi de quelle couleur est ta culotte, je te dirai qui tu es.';
$twentyfourth = 'Tout le monde m\'a beaucoup déçu jusqu\'à présent : tu voudrais pas relever le niveau ?';
$twentyfifth = 'Que penses-tu de la situation géopolitique en Afrique centrale ?';


$array = array($first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eigth, $nineth, $tenth, $eleventh, $twelfth, $thirteenth, $fourteenth, $fifteenth, $sixteenth, $seventeenth, $eighteenth, $nineteenth, $twentieth, $twentyfirst, $twentyfourth, $twentyfifth);
for ($i=0; $i<1; $i++) {
    echo $array[rand(0, count($array) - 1)] . "\n";
}

?>