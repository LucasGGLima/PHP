<?php
$res01 = $_POST["alt01"];
session_start();
$_SESSION['res01'] = $res01;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta03.php" method="post" class="borda">

        <section class="box imagem center">

            <img src="imgs/img03.webp" class="imagens borda">

        </section>

        <section class="box pergunta">

            <p class="perguntas">Qual desses é o país mais populoso da Ámerica do Sul:</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt02" value="false">
                <label>Argentina</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt02" value="false">
                <label>Venezuela</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt02" value="true">
                <label>Brasil</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt02" value="false">
                <label>Colômbia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt02" value="false">
                <label>Suriname</label>

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