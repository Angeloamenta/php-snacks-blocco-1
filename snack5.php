<?php 
$paragrafo = "Nella composizione , nella scrittura tecnica e nella scrittura online , il termine lunghezza del paragrafo si riferisce al numero di frasi in un paragrafo e al numero di parole in quelle frasi.

Non esiste una lunghezza impostata o 'corretta' per un paragrafo. Come discusso di seguito, le convenzioni sulla durata appropriata variano da una forma di scrittura all'altra e dipendono da vari fattori, tra cui mezzo , argomento , pubblico e scopo .

In poche parole, un paragrafo dovrebbe essere lungo o breve quanto necessario per sviluppare un'idea principale. Come dice Barry J. Rosenberg, 'Alcuni paragrafi dovrebbero pesare due o tre frasi succinte, mentre altri dovrebbero pesare sette o otto frasi robuste. Entrambi i pesi sono ugualmente sani' ( Spring Into Technical Writing for Engineers and Scientists , 2005).";

$pieces = explode(".", $paragrafo);


echo '<h1>'. "paragrafo intero" . '</h1>';
echo $paragrafo;
echo '<h1>'. "paragrafo diviso" . '</h1>';
foreach ($pieces as $piece) {
    echo '<div>' . $piece . '</div>';

}

?>

<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h1>Paragrafo intero</h1>
     <p><?php echo $paragrafo ?></p>
     <h1>Paragrafo suddiviso</h1>
     <div><?php echo $piece ?></div>
     

 </body>
 </html> -->