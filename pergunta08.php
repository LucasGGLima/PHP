<?php
$res07 = $_POST["alt07"];
session_start();
$_SESSION['res07'] = $res07;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta09.php" method="post" class="borda">

        <section class="box imagem center">

            <img src="europa.jpg" class="imagens borda">

        </section>

        <section class="box pergunta">

            <p class="perguntas">Qual é o segundo maior país da europa em extensão? ( Sei que você sabe que a Rússia é a primeira, boa sorte..)</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt08" value="false">
                <label>Portugal</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt08" value="false">
                <label>Ucrânia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt08" value="true">
                <label>França</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt08" value="false">
                <label>Espanha</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt08" value="false">
                <label>Reino Unido</label>

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