<?php
$res04 = $_POST["alt04"];
session_start();
$_SESSION['res04'] = $res04;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta06.php" method="post" class="borda">

        <section class="imagem center">

            <img src="imgs/img06.jpg" class="imagens borda">

        </section>

        <section class="pergunta">

            <p class="perguntas">A falha de San Andreas, localizada na Ámerica do norte foi formada pela movimentação das placas:</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt05" value="false">
                <label>Europeia e Norte-Americana</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt05" value="false">
                <label>Euro-Asiática e Norte-Americana</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt05" value="true">
                <label>Pacífica e Norte-Americana</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt05" value="false">
                <label>Sul-Americana e Norte-Americana</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt05" value="false">
                <label>Sul-Americana e Africana</label>

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