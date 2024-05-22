<?php
$res08 = $_POST["alt08"];
session_start();
$_SESSION['res08'] = $res08;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta10.php" method="post" class="borda">

        <section class="box imagem center">

            <img src="goias.png" class="imagens borda">

        </section>

        <section class="box pergunta">

            <p class="perguntas">Qual é a capital de Goiás?</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt09" value="false">
                <label>Caldas Novas</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt09" value="false">
                <label>Distrito Federal</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt09" value="false">
                <label>Aparecida de Goiânia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt09" value="true">
                <label>Goiânia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt09" value="false">
                <label>Maceió</label>

                </div>

            </div>

        </section>

        <section class="box botao center">
            <button class="botoes borda" type="submit">Próxima</button>
        </section>

        <section class="box botao center">
        <a href="index.html">voltar</a>
        </section>

    </form>

</body>

</html>