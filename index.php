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

    <div class="center-align">
        <h3>CREA IL QR CODE CHE DESIDERI!</h3>
        <br>
        <form action="eindex.php" method="POST">

            <div>
                <h5>Scegli la grandezza</h5>
            </div>
            <div class="input-field col s12 m6">
                <select class="icons" name="typeOfMonitor" id="typeSelectMonitor">
                    <option class="left " value="0">PICCOLO</option>
                    <option class="left" value="1">MEDIO</option>
                    <option class="left" value="2">GRANDE</option>
                    <option class="left" value="3">MOLTO GRANDE</option>
                </select>
            </div>
            <div>
                <h5>Scegli il tipo di striga/he vuoi codificare</h5>
            </div>
            <div class="input-field col s12 m6">
                <select class="icons" name="typeOfQr" id="typeSelect">
                    <option class="left " id="setEmail" value="0">email</option>
                    <option class="left" id="setSite" value="1">sito web</option>
                    <option class="left" id="setContact" value="2">contatto</option>
                    <option class="left" id="setCall" value="3">chiamata</option>
                    <option class="left" id="setSms" value="4">sms</option>
                    <option class="left" id="no" name="no" value="5">altro</option>
                </select>
            </div>

            <button class="btn waves-effect waves-light" type="button" onclick="mostraInput()">Invio tipo di testo e
                grandezza
                <i class="material-icons right">send</i>
            </button>
            <br>
            <div id="mostraDopo" class="hide">
                <h4>Cosa vuoi tramutare in qr code?</h4>
                <br>
                <div id="text">
                    <h5>testo:</h5>
                </div>
                <div class="hide" id="email">
                    <h5>email:</h5>
                </div>
                <div class="hide" id="site">
                    <h5>sito:</h5>
                </div>
                <div class="hide" id="call">
                    <h5>numero:</h5>
                </div>



                <input name="text" class="hide" id="textInput">
                <div class="hide" id="contact">
                    <h5>Nome e numero di telefono:</h5>
                </div>
                <div class="row">
                    <input name="name" id="name" class="hide">
                    <input name="phone" id="phone" type="tel" class="hide ">
                </div>
                <br>
                <button class="btn waves-effect waves-light" type="submit"> CREA QR
                    <i class="material-icons right">send</i>
                </button>
                <br>
            </div>

        </form>
    </div>
</body>
<!--.js and jquery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--custom js-->
<script type="text/javascript" src="js/main.js"></script>
<script>

</script>

</html>