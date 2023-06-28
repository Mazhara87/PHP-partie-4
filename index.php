<?php
// ex1
function returnTrue() {
    return true;
}
echo returnTrue();
?>
<br>

<?php
// ex2
function returnString($chaine) {
    return $chaine;
}
echo returnString("Hi");
?>
<br>

<?php
// ex3
function concatStrings($chaine1, $chaine2) {
    return $chaine1 . $chaine2;
}
echo concatStrings("Bonjour, ", "le monde");
?>
<br>

<?php
// ex4
function compareNumbers($numbre1, $numbre2) {
    if($numbre1>$numbre2) {
        return "Le premier nombre est plus grand";
    } elseif($numbre1<$numbre2) {
        return "Le premier nombre est plus petit";
    } else {
        return "Les deux nombres sont identiques";
    }
}
echo compareNumbers(5, 10);
echo compareNumbers(7, 3);
echo compareNumbers(3, 3);
?>
<br>

<?php
// ex5
function concatParams($nombre, $chaine) {
    return $nombre . $chaine;
}

echo concatParams(5, " pommes");
?>
<br>


<?php
// ex6
function formatPerson($nom, $prenom, $age) {
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
}

echo formatPerson("Doe", "John", 25);
?>
<br>

<?php
// ex7
function checkGenderAndAge($age, $genre) {
    if ($age >= 18) {
        if ($genre == "Homme") {
            return "Vous êtes un homme et vous êtes majeur";
        } else {
            return "Vous êtes une femme et vous êtes majeure";
        }
    } else {
        if ($genre == "Homme") {
            return "Vous êtes un homme et vous êtes mineur";
        } else {
            return "Vous êtes une femme et vous êtes mineure";
        }
    }
}

echo checkGenderAndAge(20, "Homme");
?>
<br>


<?php
// ex8
function sumNumbers($nombre1 = 0, $nombre2 = 0, $nombre3 = 0) {
    return $nombre1 + $nombre2 + $nombre3;
}

echo sumNumbers(5, 10, 15);
?>
