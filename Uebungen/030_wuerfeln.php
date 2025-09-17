<?php
/*
* Würfeln
*
* Würfel eine Zahl (von 1 bis 6) und gib aus,
* was gewürfelt wurde:
* Super, eine 6!
* Immerhin noch eine 5!
* Das reicht nicht! (bei 1-4)
*
* Hilfsmittel: rand(), Verzweigung
*/


// Würfeln einer Zahl zwischen 1 und 6
$zahl = rand(1, 6);

// Ausgabe abhängig vom Ergebnis
if ($zahl == 6) {
    echo "Super, eine 6!";
} elseif ($zahl == 5) {
    echo "Immerhin noch eine 5!";
} else {
    echo "Das reicht nicht! (bei $zahl)";
}