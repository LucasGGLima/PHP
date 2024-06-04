<?php
$res09 = $_POST["alt09"];
session_start();
$_SESSION['res09'] = $res09;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="resultado.php" method="post" class="borda">

        <section class="imagem center">

            <img src="imgs/img11.jpg" class="imagens borda">

        </section>

        <section class="pergunta">

            <p class="perguntas">Qual foi o país mais visitado do mundo em 2023?</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt10" value="false">
                <label>Espanha</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt10" value="true">
                <label>França</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt10" value="false">
                <label>Estados Unidos</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt10" value="false">
                <label>Brasil</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt10" value="false">
                <label>Itália</label>

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