<?php 

    /*includo il file 'library' della cartella di creazione del qr */
    include('phpqrcode/qrlib.php');
   
    /*testo utilizzato per tutti i tipi di qr tranne per la contact card*/ 
    $content = $_REQUEST['text'];

    /* Directory in ocale dove finira il file */
    $tempDir = 'qrcodeimg/';

    /*select del tipo di qr*/
    $select = $_REQUEST['typeOfQr'];

    /*select tipo di monitor*/
    $monitorSelect = $_REQUEST['typeOfMonitor'];

    /*numero di telefono e nome per la contact card */
    $phone = $_REQUEST['phone'];
    $name = $_REQUEST['name'];
    

    /*assegnamento alla variabile di codifica i vari testi da appunto codificare */
    switch($select){
        case 0:
            $codeContents = 'mailto:'.$content; 
            break;
        case 2:
            $codeContents  = 'BEGIN:VCARD'."\n".'FN:'.$name."\n".'TEL;WORK;VOICE:'.$phone."\n".'END:VCARD';
            break; 
        case 3:
            $codeContents = 'tel:'.$content; 
            break;
        case 4:
            $codeContents = 'sms:'.$content; 
            break;
        default:
            $codeContents = $content; 
            break;
    }

    /*modifico la pixel size in base al value passato dalla select */
    switch ($monitorSelect){
        case 0:
            $pxSize = 4;
            break;
        case 1:
            $pxSize = 8;
            break;
        case 2:
            $pxSize = 16;
            break;
        case 3:
            $pxSize = 32;
            break;
    }
    
    /*creo il nome del file .png grazie al protocollo di criptazione md5 criptando la stringa che verraà codificata in qr */
    $fileName = 'qrcode'.md5($codeContents).'.png';

    /*percorso assoluto e relativo del file .png*/
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;
    
    /*primo controll di esistenza del file*/
    if (!file_exists($pngAbsoluteFilePath)) {

        /*creazione qrcode --> la funzione richiede come argomenti(stringa da codificare, percorso assoluto del file, qr_elevel(quanto è fitto il qr), pixel size*/
        QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_M, $pxSize);

        /*mando segnale in console di conferma creazione*/
        echo '<script type="text/javascript"> console.log("creato");</script>';

        /*variabile risultato che servirà alla stampa del risultato*/
        /*assegno appunto un segnale di successo dell'operazione */
        $risultato = "QR CODE CREATO CON SUCCESSO";
    } else {
        /*evitando l'inutile creazione di un altro file assegno a risultato un messaggio che dica che il file è gia stato creato*/
        $risultato = "QR CODE GIÀ CREATO";

        /*segnale in console di file già creato (mando anche segnali in console per verificare se eventuali errori derivano dalla stampa o dalla non creazione del qr)*/
        echo '<script type="text/javascript">  console.log("file già creato");</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR CREATOR</title>

    <!--MATERIALIZE-->
    <!--.css-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--custom style-->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">
                <i class="material-icons">
                    arrow_back
                </i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><?php 
                    echo $risultato;
                    ?></li>
                <!--Metodo un po' originale di lasciare spazio LOL :)  DA CAMBIARE-->
                <li style="visibility: hidden;">MI SERVE SPAZIOOOOOOOOOO</li>
            </ul>
        </div>
    </nav>
    <br>
    <div>
    <!--stampo immagine .png-->
    <img src="<?php echo $urlRelativeFilePath ?>">

    <!--tabella con qr decodificato e directory file PNG-->
      <table class="responsive-table centered">
            <thead>
              <tr>
                  <th>testo</th>
                  <th>url in locale file png</th>
              </tr>
            </thead>
    
            <tbody>
              <tr>
                <td>
                <?php
                    /*differenzio i 2 casi di diverse variabili elaborate */
                    if($select!=2) echo $content ; //tutti i casi tranne le contact cards
                    else echo'<b>Numero</b>: '.$phone.'<br><b>Nome e Cognome</b>: '.$name; //siccome utilizzano due campi input diversi
                ?>
                </td>
                <td><?php  echo $pngAbsoluteFilePath ?></td>
              </tr>
              
            </tbody>
          </table>
                
    
    
</body>
<!--.js and jquery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--custom js-->
<script type="text/javascript" src="js/main.js"></script>

</html>