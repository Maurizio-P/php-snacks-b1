<?php

if (empty($_GET["email"] && ["name"] && ["age"])) {
    exit("Nessun email inserita nell'url");
}
if (empty($_GET["age"])) {
    exit("Nessun age inserito nell'url");
}
if (empty($_GET["name"])) {
    exit("Nessun name inserito nell'url");
}

$email = $_GET["email"];
$hasAt = strchr($email, "@");
$emailPart = explode("@", $email);
$hasDot = strchr($emailPart[1], ".");

$name = $_GET["name"];
$lengthName = strlen($name);
$namePass = "";

if (strlen($name) >= 3) {
    $namePass = $name; 
}

$age = $_GET["age"];

var_dump($hasDot, $hasAt, $namePass);

if ($hasDot && $hasAt && $namePass && is_numeric($age)) {
    echo "Accesso riuscito";
}else {
    echo "Accesso negato";
}

?>