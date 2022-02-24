<?php
$word = $_GET ? $_GET['paroladacensuare'] : '';
$paragraph = 'Dopo mesi di attesa, ora i nodi della infrastrutture per 
le Olimpiadi invernali di Milano-Cortina 2026 vengono al pettine. Per tentare di accelerare l’iter e la realizzazione, 
con decreto del Presidente del Consiglio dei Ministri sono stati individuati otto interventi per i quali, data la particolare 
difficoltà esecutiva e la complessità delle procedure tecnico-amministrative, è stato nominato Commissario straordinario Luigi Valerio Sant’Andrea, 
attuale amministratore delegato della società “Infrastrutture Milano-Cortina 2026 SpA”.
«È necessario assicurare la realizzazione delle opere nei tempi previsti e per questo occorre accelerare - dichiara il ministro 
per le Infrastrutture Enrico Giovannini - La nomina del Commissario straordinario e le procedure veloci di cui potrà avvalersi consentiranno di realizzare 
gli interventi nei tempi necessari per disposizione degli atleti e del pubblico infrastrutture adeguate ad una manifestazione sportiva globale 
come le Olimpiadi invernali, che sarà ospitata dal nostro Paese in uno scenario paesaggistico tra i più belli e suggestivi del mondo».';

$new_paragraph = str_replace(strtolower($word), "***", strtolower($paragraph));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Paragrafo Originale -->
    <h1>Paragrafo Originale</h1>
    <p><?php echo $paragraph ?></p>

    <!-- Lunghezza del parametro -->
    <span>La lunghezza del parametro è:</span>
    <strong><?php echo strlen($paragraph); ?></strong>

    <!-- Parola da censurare -->
    <form action="index.php" method="get">
        <h3>Inserisci la parola da censurare</h3>
        <input type="text" placeholder="Scrivi qui" name="paroladacensuare">
        <button>Invia</button>
    </form>

    <!-- Paragrafo censurato -->
    <div>
        <p><?php echo $new_paragraph ?></p>
    </div>
</body>

</html>