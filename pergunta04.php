<?php
$res03 = $_POST["alt03"];
session_start();
$_SESSION['res03'] = $res03;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questão 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="pergunta05.php" method="post" class="borda">

        <section class="imagem center">

            <img src="imgs/img05.jpg" class="imagens borda">

        </section>

        <section class="pergunta">

            <p class="perguntas">Em qual país está o Monte Fuji?</p>
            <div>

                <div class="orgText">
                    <input type="radio" name="alt04" value="false">
                <label>China</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt04" value="false">
                <label>Rússia</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt04" value="false">
                <label>Havaí</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt04" value="true">
                <label>Japão</label>
                <br>
                </div>

                <div class="orgText">
                    <input type="radio" name="alt04" value="false">
                <label>Taiwan</label>

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