<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = ($_GET['t'] == "")?"DEFAULT TEXT":$_GET['t'];
        $tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
        $cor = isset($_GET['cor'])?$_GET['cor']:"#000000";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03cores</title>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";

    ?>
</div>
<a href="./Formulario.html"><button style="margin-top: 4%; margin-left:15%;">Voltar</button></a>
</body>
</html>