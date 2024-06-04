<?php
$res06 = $_POST["alt06"];
session_start();
$_SESSION['res06'] = $res06;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta08.php" method="post" class="borda">

        <section class="imagem center">

            <img src="imgs/img08.jpg" class="imagens borda">

        </section>

        <section class="pergunta">

            <p class="perguntas">Qual é o pais mais rico do mundo, segundo o PIB?</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt07" value="false">
                <label>Austrália</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt07" value="false">
                <label>Irlanda</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt07" value="false">
                <label>Suécia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt07" value="false">
                <label>Suíça</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt07" value="true">
                <label>Luxemburgo</label>

                </div>

            </div>

        </section>

        <section class="center">
            <button class="botoes borda" type="submit">Próxima</button>
        </section>

        <section class="botao center">
        <a href="index.html">voltar</a>
        </section>

    </form>

</body>

</html>