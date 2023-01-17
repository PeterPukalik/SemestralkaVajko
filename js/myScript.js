function validateForm() {
    let name = document.forms["addHouse"]["nazov"].value;
    if (name === "" ) {
        alert("Name must be filled out");
        return false;
    }
    if ( name.length > 100) {
        alert("meno musi byt kratsie ako 100 znakov");
        return false;
    }
    let popis = document.forms["addHouse"]["popis"].value;
    if(popis === "") {
        alert("Musis zadat popis");
        return false;
    }
    if(popis.length <= 10 && popis.length > 200){
        alert("Popis musi obsahovat aspon 10 znakov");
        return false;
    }
    let odkaz = document.forms["addHouse"]["foto"].value;
    if (odkaz === "" || odkaz.length > 500) {
        alert("musis zadat odkaz alebo cestu k fotke");
        return false;
    }
    let cena = document.forms["addHouse"]["cena"].value;
    if(isNaN(cena) || cena <= 0 ){
        alert("musis zadat kladne cislo");
        return false;
    }

    return true;
}

window.onresize = function() {
    if (window.innerWidth < 600) {
        document.getElementById("cardsbootstrap").classList.remove("row");
    }if (window.innerWidth > 601){
        document.getElementById("cardsbootstrap").classList.add("row");
    }
}
// window.onload = function() {
//     if (window.innerWidth < 600) {
//         document.getElementById("cardsbootstrap").classList.remove("row");
//     }if (window.innerWidth > 601){
//         document.getElementById("cardsbootstrap").classList.add("row");
//     }
// }

function valideSaleForm() {
    let name = document.forms["addSale"]["name"].value;
    if (name === "" ) {
        alert("Name must be filled out");
        return false;
    }
    if ( name.length > 100) {
        alert("meno musi byt kratsie ako 100 znakov");
        return false;
    }
    let city = document.forms["addSale"]["city"].value;
    if(city === "") {
        alert("Musis zadat city");
        return false;
    }
    if(city.length <= 4 && city.length > 100){
        alert("city musi obsahovat aspon 4 znakov");
        return false;
    }
    let photo = document.forms["addSale"]["photo"].value;
    if (photo === "" || photo.length > 500) {
        alert("musis zadat odkaz alebo cestu k fotke");
        return false;
    }

    return true;
}
