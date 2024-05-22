<?php
$res10 = $_POST["alt10"];
session_start();
$_SESSION['res10'] = $res10;
$resultado = array(
    0 => $_SESSION['res01'],
    1 => $_SESSION['res02'],
    2 => $_SESSION['res03'],
    3 => $_SESSION['res04'],
    4 => $_SESSION['res05'],
    5 => $_SESSION['res06'],
    6 => $_SESSION['res07'],
    7 => $_SESSION['res08'],
    8 => $_SESSION['res09'],
    9 => $_SESSION['res10'],
);
$i = 0;
$comparacao = 0;

for($i; $i < 10; $i++){
    if($resultado[$i] == "true"){
        $comparacao++;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <p id="resultadofinal"> 
    <?php
    echo "Você acertou ".$comparacao." questões, parabéns.";
    ?>
   </p>
</body>
</html>