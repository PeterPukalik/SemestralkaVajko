

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


window.onload = getSales();
setInterval(getSales, 10000);