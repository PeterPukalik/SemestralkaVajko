

async function getCarpenter() {
    var xmlHttp = new XMLHttpRequest();
    //onreadystatechange - defines a function to be called when the readyState property changes
    xmlHttp.onreadystatechange = function () {
        //4: request finished and response is ready, 200: "OK"
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            document.getElementById('carpenter').innerHTML = this.responseText;
        }
    }
    xmlHttp.open("GET", "?c=carpenter&a=refresh", true);
    xmlHttp.send();
}


window.onload = getCarpenter();

// Get the carousel element
var carousel = document.getElementById("carouselExampleControls");

// Use setInterval to call the next() function every 5 seconds
setInterval(function() {
    carousel.next();
}, 5000);