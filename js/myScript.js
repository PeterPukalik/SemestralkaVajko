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
window.onload = function() {
    if (window.innerWidth < 600) {
        document.getElementById("cardsbootstrap").classList.remove("row");
    }if (window.innerWidth > 601){
        document.getElementById("cardsbootstrap").classList.add("row");
    }
}

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

function validateCarpenterForm() {
    let name = document.forms["addCarpenter"]["name"].value;
    if (name === "" ) {
        alert("Name must be filled out");
        return false;
    }
    if ( name.length > 100) {
        alert("meno musi byt kratsie ako 100 znakov");
        return false;
    }
    let picture = document.forms["addCarpenter"]["picture"].value;
    if (picture === "" ) {
        alert("picture must be filled out");
        return false;
    }
    if ( picture.length > 500) {
        alert("picture musi byt kratsie ako 500 znakov");
        return false;
    }
}

function validateContactForm(){
    var inputs = document.querySelectorAll("#contactForm input, #contactForm textarea");
    var valid = true;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value === "") {
            inputs[i].classList.add("invalid");
            valid = false;
        } else {
            inputs[i].classList.remove("invalid");
        }
    }

    if (!valid) {
        alert("Please fill out all fields.");
    }

    return valid;
}
function confirmDeleteCarpenter(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=carpenter&a=delete&id="+ id;
    }
    return false;
}
function confirmSaleDele(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=sale&a=delete&id="+ id;
    }
    return false;
}
function confirmHomeDel(id) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=houses&a=delete&id="+ id;
    }
    return false;
}
function confirmMaterialDel(id){
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = "?c=material&a=delete&id="+ id;
    }
    return false;
}

async function filterProducts(search){
    let response;
    response = await fetch("?c=carpenter&a=get");
    let products = await response.json();
    let filtredProdutcs = products.filter( products=>products.name.toLowerCase().includes(search.toLowerCase()));
    dispayProducts(filtredProdutcs);
}


function dispayProducts(filtredProducts) {
    document.getElementById('carpenter').innerHTML = '';

        for(let products of filtredProducts){
            const productElement = document.createElement('product.name');
            productElement.classList.add("carpenterCard");
            productElement.classList.add("card");
            productElement.innerHTML = `    
                        <h5 class="card-title">${products.name}</h5>\n 
                        <img class="card-img-top" src='${products.picture}' alt="Card image cap">`;

            document.getElementById('carpenter').appendChild(productElement);
        }

}



