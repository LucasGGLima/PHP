<?php
$res05 = $_POST["alt05"];
session_start();
$_SESSION['res05'] = $res05;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DQuestão 6t</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta07.php" method="post" class="borda">

        <section class="box imagem center">

            <img src="img01.jpg" class="imagens borda">

        </section>

        <section class="box pergunta">

            <p class="perguntas">Em quantos estados o bioma do pantanal está localizado?</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt06" value="true">
                <label>Mato Grosso e Mato Grosso do Sul.</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt06" value="false">
                <label>Goiás, Mato Grosso e Mato Grosso do Sul.</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt06" value="false">
                <label>Pará, Rio de Janeiro e Goiás.</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt06" value="false">
                <label>Amapá, Pará, Mato Grosso e Tocantins.</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt06" value="false">
                <label>Acre, Amazonas e Roraima.</label>

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