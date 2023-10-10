<?php

$allievi = [
[
    "nome" => "Jimin",
    "cognome" => "Park",
    "passatempi" => ["Danza", "Canto", 'Boxing']
],
[
    "nome" => "Hoseok",
    "cognome" => "Jeon",
    "passatempi" => ["League of Legends", "Danza", 'Rap']
],
[
    "nome" => "Yoongi",
    "cognome" => "Min",
    "passatempi" => ["Produzione", "Chitarra", 'Rap']
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-allievo {
            border: 1px solid red;
            padding: 1em;
        }
    </style>
</head>
<body>    
    <!-- inizia parte da ripetere con php -->
    <?php foreach ($allievi as $allievo) { ?>
    <div class="card-allievo">  } ?>
<p>
    <strong>nome</strong><?php echo $allievo['nome']; ?><br>
    <strong>cognome</strong><?= $allievo['cognome'] ?> <br> <!-- abbreviazione usata solo per istruzioni echo-->
 </p>
 <ul class="card-passatempi">
    <?php foreach ($allievo['passatempi'] as $passatempo) {
        echo "<li>$passatempo</li>";
        // <li>Tennis</li>
  
    } ?>  </ul>
    </div>
    <!--  fine parte da ripetere -->
    
</div>
    
</body>
</html>




