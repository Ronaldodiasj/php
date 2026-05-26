<!Doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IF-Else</title>
</head>
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if ($idade >=16) {
    echo "Você nâo votar $nome";
}
elif($idade >= 18){
    echo "Você não tem OBRIGAÇâo de votar $nome";
}
elif($idade >=65 ){
    echo "Você tem OBRIGAÇâo de votar $nome";
}
else{
    echo "Você tem OBRIGAÇâo de votar $nome";
}

<body>

</body>
</html>