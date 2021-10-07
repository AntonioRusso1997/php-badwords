<?php
    //Creo variabile con paragrafo
    $paragraph = ' Nel mezzo del cammin di nostra vita, Mi ritrovai per una selva oscura ché la diritta via era smarrita. <br> Ahi quanto a dir qual era è cosa dura esta selva selvaggia e aspra e forte che nel pensiero rinova la paura!';
    //Variabile per la lunghezza
    $lenParag = strlen($paragraph);
    //Variabile per la parola da censurare
    $badword = $_GET['badword'];
    $censure = '***';
    //Variabile per sostituire una parte di una stringa con un'altra stringa
    $modParagraph = str_replace($badword, $censure, $paragraph);
?>

<h1 style="color:red">Paragrafo intero:</h1>
<p style="font-size: 22px;"><?php echo $paragraph ?></p>
<h2 style="color: red;">Lunghezza:</h2>
<p style="font-size: 22px;"><?php echo $lenParag ?></p>
<h2 style="color: red;">Badword:</h2>
<p style="font-size: 22px;"><?php echo $badword ?></p>
<h1 style="color:red">Paragrafo censurato:</h1>
<p style="font-size: 22px;"><?php echo $modParagraph ?></p>