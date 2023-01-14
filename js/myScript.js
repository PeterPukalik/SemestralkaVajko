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


//ajax
async function getSales() {
    var xmlHttp = new XMLHttpRequest();
    //onreadystatechange - defines a function to be called when the readyState property changes
    xmlHttp.onreadystatechange = function () {
        //4: request finished and response is ready, 200: "OK"
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            document.getElementById('country').innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "?c=sale&a=refresh", true);
    xmlHttp.send();
}