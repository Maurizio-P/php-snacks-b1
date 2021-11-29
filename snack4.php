<?php

$par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rem cumque dignissimos temporibus debitis aspernatur, voluptatum, earum necessitatibus ipsum nemo maiores molestias laboriosam asperiores provident! A, doloremque. Repellat, corrupti a.";

$arrayPar = explode(".", $par)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for ($i=0; $i < count($arrayPar) ; $i++) { 
            echo "<p>" . $arrayPar[$i] . "</p>";
            
        }
        ?>
</body>
</html>