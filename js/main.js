/*inizializzazzione con jQuery della select in materialize*/
$(document).ready(function () {
    $('select').formSelect();
});

function mostraInput() {
    let index = document.getElementById("typeSelect").selectedIndex;
    let email = document.getElementById("email");
    let text = document.getElementById("text");
    let site = document.getElementById("site");
    let contact = document.getElementById("contact");
    let name = document.getElementById("name");
    let phone = document.getElementById("phone");
    let textInput = document.getElementById("textInput");
    let call = document.getElementById("call");
    let mostraDopo = document.getElementById("mostraDopo");

    mostraDopo.classList.remove("hide");

    /*switch gestione comparsa/scamparsa */ 
    /*estremamente lunga e rindondante ma non si può fare altrimenti per via del getelementById (sarebbe comodo farlo con array)*/ 
    switch (index) {
        case 0:
            email.classList.remove("hide");
            textInput.classList.remove("hide");
            text.classList.add("hide");
            site.classList.add("hide");
            contact.classList.add("hide");
            name.classList.add("hide");
            phone.classList.add("hide");
            call.classList.add("hide");
            break;
        case 1:
            site.classList.remove("hide");
            textInput.classList.remove("hide");
            email.classList.add("hide");
            text.classList.add("hide");
            contact.classList.add("hide");
            name.classList.add("hide");
            phone.classList.add("hide");
            call.classList.add("hide");
            break;
        case 2:
            contact.classList.remove("hide");
            name.classList.remove("hide");
            phone.classList.remove("hide");
            email.classList.add("hide");
            text.classList.add("hide");
            site.classList.add("hide");
            textInput.classList.add("hide");
            call.classList.add("hide");
            break;
        case 3:
        case 4:
            call.classList.remove("hide");
            textInput.classList.remove("hide");
            contact.classList.add("hide");
            name.classList.add("hide");
            phone.classList.add("hide");
            email.classList.add("hide");
            text.classList.add("hide");
            site.classList.add("hide");
            
            break;
        default:
            text.classList.remove("hide");
            textInput.classList.remove("hide");
            email.classList.add("hide");
            site.classList.add("hide");
            contact.classList.add("hide");
            name.classList.add("hide");
            phone.classList.add("hide");
            call.classList.add("hide");
            break;
    }
}