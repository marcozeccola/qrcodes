$(document).ready(function () {
    $('select').formSelect();
});

function mostraInput() {
    let index = document.getElementById("typeSelect").selectedIndex;
    let email = document.getElementById("email");
    let text = document.getElementById("text");
    let site = document.getElementById("site");
    let mostraDopo = document.getElementById("mostraDopo");

    mostraDopo.classList.remove("hide");

    if (index == 0) {
        email.classList.remove("hide");
        text.classList.add("hide");
        site.classList.add("hide");
    } else if(index == 1){
        site.classList.remove("hide");
        email.classList.add("hide");
        text.classList.add("hide");
    }else{
        text.classList.remove("hide");
        email.classList.add("hide");
        site.classList.add("hide");
    }
}

