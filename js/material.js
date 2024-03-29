

async function getMaterials() {
    var xmlHttp = new XMLHttpRequest();
    //onreadystatechange - defines a function to be called when the readyState property changes
    xmlHttp.onreadystatechange = function () {
        //4: request finished and response is ready, 200: "OK"
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            document.getElementById('materials').innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "?c=material&a=refresh", true);
    xmlHttp.send();
}


window.onload = getMaterials();