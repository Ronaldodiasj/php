<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta accesskey="c" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Do-While</title>
</head>
<body>
    <h1>Loop Do-While</h1>
    <?php
        $contador = 0;
        do {
            echo "Contador: $contador <br/>";
            $contador++;
        } while ($contador < 5);
    ?>
</body>
</html>