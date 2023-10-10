<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$nome = 'Mario'; //string
$cognome = "Rossi";

$frase = "Ciao $nome $cognome, come va?<br>";
echo $frase;

$frase = 'Ciao $nome $cognome, come va?<br>';


$eta = 33;
$peso = 95.7;


$colori = array('red', 'green', 'blue');
// altrernativa: $colori = ['red', 'red', 'blue'];

foreach ($colori as $key => $colore) {
    echo "$key -> $colore <br>";
}

$colore_verde = $colori[1];
$frase = "ho trovato il $colore_verde <br>";
echo $frase;

//Aggiungere un colore alla lista 

$colori[] = 'magenta';
$colori[] = 'yellow';

echo "<pre>";
print_r($colori); //per stampare gli array non usiamo echo ma print_r
echo "</pre>";

$colori[3] = 'rebeccapurple';

echo "<pre>";
print_r($colori); 
echo "</pre>";

?>

</body>
</html>