
<!-- Premier essai variables -->

<?php

// number
$note = 10;
$note2= 15;

echo ($note + $note2) / 2 ;

// string
$userName = 'Dokkoh';
echo "\n$userName\n";

$prenom = 'Dokkoh';
$nom = 'Dev';
echo $prenom . ' ' . $nom;
echo "$prenom $nom";

// boolean

$fo = false;
$foo = true;
$foo1 = null;

?>

<!-- exo -->

<?php
$name = 'Jhon';
$firstName = 'Doe';
$rate1 = 10;
$rate2 = 20;
$average = ($rate1 + $rate2) / 2;

echo 'Bonjour ' . $name . ' ' . $firstName . ' vous avez eu ' . (($rate1 + $rate2) / 2) . ' de moyenne';
echo "\nBonjour $name $firstName vous avez eu $average de moyenne";


?>