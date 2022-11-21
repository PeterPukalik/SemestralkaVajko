function validateForm() {
    let name = document.forms["addHouse"]["nazov"].value;
    if (name === "") {
        alert("Name must be filled out");
        return false;
    }
    let popis = document.forms["addHouse"]["popis"].value;
    if(popis === "") {
        alert("Musis zadat popis");
        return false;
    }
    if(popis.length >= 10){
        alert("Popis musi obsahovat aspon 10 znakov");
        return false;
    }
    let odkaz = document.forms["addHouse"]["foto"].value;
    if (odkaz === "") {
        alert("musis zadat odkaz alebo cestu k fotke");
        return false;
    }
    let cena = document.forms["addHouse"]["cena"].value;
    if(typeof cena == "string"){
        alert("musis zadat kladne cislo");
        return false;
    }
    // let cena = document.forms["addHouse"]["cena"].value;
    // if (cena  < 0) {
    //     alert("nemoze byt zaporna cena");
    //     return false;
    // }
    return true;
}