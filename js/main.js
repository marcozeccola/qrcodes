/*inizializzazzione con jQuery della select in materialize*/
$(document).ready(function () {
    $('select').formSelect();
});


function mostraInput() {

    /*seconda parte di intex.php */
    let mostraDopo = document.getElementById("mostraDopo");

    /*value dell''option della select */
    let index = document.getElementById("typeSelect").selectedIndex;

    /*comincia col mostrare il div generale dove c'è dentro il resto*/
    mostraDopo.classList.remove("hide");

    /*switch delle option */
    /*si chiama forMostra() con per argomento il numero corrispondente alla posizione in array degi elementi da mostrare */
    switch (index) {
        //email
        case 0:
            forMostra(0, 6);
            break;
        //sito
        case 1:
            forMostra(2,6);
            break;
        //contact card
        case 2:
            forMostra(3, 4, 5);
            break;
        //chiamata-sms
        case 3:
        case 4:
            forMostra(7, 6);
            break;
        //altro
        case 5:
            forMostra(1, 6);
            break;
    }
}

/*function meccanismo di show/hide */
function forMostra(primo, secondo, terzo) {

    /*array input output da ciclare*/
    let io = [];

    io[0] = document.getElementById("email");
    io[1] = document.getElementById("text");
    io[2] = document.getElementById("site");
    io[3] = document.getElementById("contact");
    io[4] = document.getElementById("name");
    io[5] = document.getElementById("phone");
    io[6] = document.getElementById("textInput");
    io[7] = document.getElementById("call");

    /*for con controllo argomenti funzione con remove/add class hide*/
    for (let i = 0; i < 9; i++) {
        if (i == primo || i == secondo || i == terzo) io[i].classList.remove("hide");
        else io[i].classList.add("hide");
    }
}
