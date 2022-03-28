<?php
$testo = 'Cappuccetto Rosso alzò gli occhi e quando vide i raggi del sole filtrare attraverso gli alberi, e tutto intorno pieno di bei fiori, pensò: Se porto alla nonna un mazzo di fiori, le farà piacere; è così presto che arrivo ancora in tempo. E corse nel bosco in cerca di fiori. E quando ne aveva colto uno, credeva che più in là ce ne fosse uno ancora più bello, correva lì e così si addentrava sempre più nel bosco. Il lupo invece andò dritto alla casa della nonna e bussò alla porta. "Chi è?" - "Cappuccetto Rosso, ti porto vino e focaccia; aprimi." - "Non hai che da alzare il saliscendi," gridò la nonna, "io sono troppo debole e non posso alzarmi." Il lupo alzò il saliscendi, entrò, e senza dir motto andò dritto al letto della nonna e la inghiottì. Poi indossò i suoi vestiti e la cuffia, si coricò nel letto, e tirò le cortine.';

$lunghezza_testo = strlen($testo);

$parola_censurata = $_GET['parola'];

$parole_censurate = 0;

$censurata = str_replace($parola_censurata, '***', $testo, $parole_censurate);

// echo '<br>';
// echo $censurata;
// echo '<br>';
// echo $lunghezza_testo;
// echo '<br>';
// echo $parole_censurate;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    p {
      font-size: 30px;
      margin: 20px 0;
    }
  </style>

</head>

<body>
  <p><?php echo $censurata; ?></p>
  <p>Il testo è lungo: <?php echo $lunghezza_testo; ?></p>
  <p>Quante parole sono state censurate: <?php echo $parole_censurate; ?></p>
</body>

</html>