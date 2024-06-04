<?php
$res02 = $_POST["alt02"];
session_start();
$_SESSION['res02'] = $res02;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta04.php" method="post" class="borda">

        <section class="imagem center">

            <img src="imgs/img04.jpg" class="imagens borda">

        </section>

        <section class="pergunta">

            <p class="perguntas">Qual é o menor país do mundo?</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt03" value="false">
                <label>Bélgica</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt03" value="false">
                <label>Croácia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt03" value="false">
                <label>Mônaco</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt03" value="false">
                <label>Nauru</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt03" value="true">
                <label>Vaticano</label>

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