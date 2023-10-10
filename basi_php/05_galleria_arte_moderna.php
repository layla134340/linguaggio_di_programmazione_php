<?php 
/**
Scrivere un elenco non ordinato (ul/li) dei titoli delle opere in 
grassetto
autore subito dopo tra parentesi
<strong>Gioconda</strong> (Leonardo Da Vinci)
 */

# Client
$opere_string = file_get_contents("https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_MAO.jos.json");

$opere_array = json_decode($opere_string,true); 

//print_r($opere_json);

echo count($opere_array);
echo "<br>";
print_r($opere_array[3]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Opere</title>
</head>
<body>
    
    <?php foreach ($opera as $opere_array) { ?>
        <div class="card-opera">
        <h2>Opere</h2><br>
        <p>
    <strong>Titolo</strong><?php echo $opere_array['Titolo']; ?><br>
 </p> 
        </div><?php } ?>
</body>
</html>

