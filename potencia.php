<!DOCTYPE html>
<tittle>Calculo da Potência</tittle>
<head><h2>Potência de dois numeros</h2></head>
<?php
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$potencia = pow($p1, $p2); 
echo "Potência dos numeros $p1 elevado por $p2 Resultado = $potencia";
?>
<p><a href="http://127.0.0.1/PHP/">Voltar</a>