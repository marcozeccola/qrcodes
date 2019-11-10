<?php 
    include('phpqrcode/qrlib.php');
   
    $content = $_REQUEST['text'];
    $tempDir = "qrcodeimg/";
    $select = $_REQUEST['typeOf'];
    if($select == "setEmail") $codeContents = 'mailto:'.$content; 
    else  $codeContents = $content;
    //md5 protocol --> da approfondire criptazione 
    $fileName = 'qrcode'.md5($codeContents).'.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;
    
    // generazione
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 16);
        echo '<script type="text/javascript"> console.log("creato");</script>';
        $risultato = "QR CODE CREATO CON SUCCESSO";
    } else {
        $risultato = "QR CODE GIÀ CREATO";
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
                <li style="visibility: hidden;">MI SERVE SPAZIOOOOOOOOOO</li>
            </ul>
        </div>
    </nav>
    <br>
    <div>
        <img src="<?php echo $urlRelativeFilePath ?>">

       

                    


      <table class="responsive-table centered">
            <thead>
              <tr>
                  <th>testo</th>
                  <th>url in locale file png</th>
              </tr>
            </thead>
    
            <tbody>
              <tr>
                <td><?php echo $content ?></td>
                <td> <?php  echo $pngAbsoluteFilePath ?></td>
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