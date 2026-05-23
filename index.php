<!DocType Html>
<html>
<head><title>PHP curso</title>
<h2>PHP</h2>
</head>
<body>
<form action="soma.php" method="post">
    <input type="text" name="S1" id="S1" placeholder="Digite seu numero" required>
    <input type="text" name="S2" id="S2" placeholder="Digite seu numero" required>
    <input type="submit" value="Soma" id="calcular">
</form><br>
<form action="subtracao.php" method="post">
    <input type="text" name="sb1" id="sb1" placeholder="Digite seu numero" required>
    <input type="text" name="sb2" id="sb2" placeholder="Digite seu numero" required>
    <input type="submit" value="Subtração" id="calcular">
</form><br>
<form action="divi.php" method="post">
    <input type="text" name="d1" id="d1" placeholder="Digite seu numero" required>
    <input type="text" name="d2" id="d2" placeholder="Digite seu numero" required>
    <input type="submit" value="Divisão" id="calcular" >
</form><br>
<form action="potencia.php" method="post">
    <input type="text" name="p1" id="p1" placeholder="Digite a base" required>
    <input type="text" name="p2" id="p2" placeholder="Digite o expoente" required>
    <input type="submit" value="Potência" id="calcular">
</form><br>
<form action="raiz.php" method="POST">
    <input type="text" name="R" id="R" placeholder="Raiz quadrada de ?" required >
    <input type="submit" value="Raiz" id="calcular">
</form>
</body>
</html>