<!DOCTYPE html>
<html lang="en">
<body>

<?php
function toonRechthoek($breedte, $hoogte, $kleur) {
    echo '<svg width="' . $breedte . '" height="' . $hoogte . '" xmlns="http://www.w3.org/2000/svg">';
    echo '<rect width="' . $breedte . '" height="' . $hoogte . '" fill="' . $kleur . '" stroke="black" stroke-width="4" />';
    echo '</svg>';
}

function toonCirkel($straal, $kleur) {
    echo '<svg height="' . ($straal * 2) . '" width="' . ($straal * 2) . '" xmlns="http://www.w3.org/2000/svg">';
    echo '<circle r="' . $straal . '" cx="' . $straal . '" cy="' . $straal . '" stroke="black" stroke-width="3" fill="' . $kleur . '" />';
    echo '</svg>';
}

function toonRechthoekLang($breedte, $hoogte, $kleur) {
    echo '<svg width="' . $breedte . '" height="' . $hoogte . '" xmlns="http://www.w3.org/2000/svg">';
    echo '<rect width="' . $breedte . '" height="' . $hoogte . '" stroke="black" stroke-width="3" fill="' . $kleur . '" />';
    echo '</svg>';
}

function toonDriehoek($kleur) {
    echo '<svg height="100" width="100" xmlns="http://www.w3.org/2000/svg">';
    echo '<polygon points="50,1 -20,200 120,190" stroke="black" stroke-width="3" fill="' . $kleur . '" />';
    echo '</svg>';
}

toonRechthoek(100, 100, "cyan");
toonRechthoek(100, 100, "blue");
toonRechthoek(100, 100, "green");
echo '<br>';
toonCirkel(45, "cyan");
toonCirkel(45, "blue");
toonCirkel(45, "green");
echo '<br>';
toonRechthoekLang(100, 50, "cyan");
toonRechthoekLang(100, 50, "blue");
toonRechthoekLang(100, 50, "green");
echo '<br>';
toonDriehoek("cyan");
toonDriehoek("blue");
toonDriehoek("green");
?>

</body>
</html>
