$(document).ready(function () {
    $('select').formSelect();
});

function mostraInput() {
    let index = document.getElementById("typeSelect").selectedIndex;
    let email = document.getElementById("email");
    let text = document.getElementById("text");
    let mostraDopo = document.getElementById("mostraDopo");

    mostraDopo.classList.remove("hide");

    if (index == 0) {
        email.classList.remove("hide");
        text.classList.add("hide");
    } else {
        text.classList.remove("hide");
        email.classList.add("hide");
    }
}