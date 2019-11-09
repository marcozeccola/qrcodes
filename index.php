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

    <span>che tipo di qr è?</span>
    <br>
    <form action="eindex.php" method="POST">

        <div class="input-field col s12 m6">
            <select class="icons" name="typeOf" id="typeSelect">
                <option class="left" id="setEmail" name="setEmail" value="0">email</option>
                <option class="left" id="no" name="no" value="2">altro</option>
            </select>
        </div>

        <button class="btn waves-effect waves-light" type="button" onclick="mostraInput()">Invio tipo input
            <i class="material-icons right">send</i>
        </button>
        <br>
        <div id="mostraDopo" class="hide">
            <span class="card-title">cosa vuoi tramutare in qr code?</span>
            <br>
            <div id="text">
                <p>testo:</p>
            </div>
            <div class="hide" id="email">
                <p>email:</p>
            </div>

            <input name="text">

            <br>
            <button class="btn waves-effect waves-light" type="submit"> CREA QR
                <i class="material-icons right">send</i>
            </button>
            <br>
        </div>

    </form>

</body>
<!--.js and jquery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--custom js-->
<script type="text/javascript" src="js/main.js"></script>
<script>

</script>

</html>