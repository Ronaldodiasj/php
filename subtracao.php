<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subtração</title>
</head>
<body>
    <?php
   
    $sb1 = $_POST["sb1"];
    $sb2 = $_POST["sb2"]; 
    $resto = $sb1 - $sb2;
    if($resto > 0) 
        {
           echo "   $sb1<br>";
           echo "- $sb2<br>";
           echo "___<br>";
           echo " $resto<br>";
           echo "Resto d subtracção é <font color=080CFF>$resto</font>";
        }
        else
        {  
           echo "   $sb1<br>";
           echo "- $sb2<br>";
           echo "___<br>";
           echo " $resto<br>";
           echo "Resto d subtracção é <font color=F54927>$resto</font>";
        }
    ?>
    <p><a href="http://127.0.0.1/PHP/">Voltar</a>
</body>
</html>