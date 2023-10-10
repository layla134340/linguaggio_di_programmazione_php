<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$classe = ["Marco", "Gianni", "Rita"]; //Index Array o numeric array
$nome_di_marco = $classe[0]; //la chiave per accedere al valore è l'indice
echo "trovare il nome di marco: $classe[0] $nome_di_marco<br>";
//Array associativi (simile a MAP di java, ma non sono oggetti (ovvero che hanno metodi e priorità))
$alunno = [
 'nome' => 'Mario',
 'cognome' => "Rossi",
 "eta" => 30,
 "hobby" => ['Tennis', 'Teatro'] //Array indicizzato
];

$nome_alunno = $alunno['nome'];
$accesso_hobby = $alunno["hobby"][1];

echo "dovrebbe stampare \"Mario\": $nome_alunno, secondo hobby $accesso_hobby<br>";
    ?>
</body>
</html>