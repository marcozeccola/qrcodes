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
        echo 'File creato!';
        echo '<br />';
    } else echo '<script type="text/javascript"> alert("file già creato")</script>';
    
    
    echo 'PNG File: '.$pngAbsoluteFilePath;
    echo '<br />';
    
    // displaying
    echo '<img src="'.$urlRelativeFilePath.'" >'
     
    
?>