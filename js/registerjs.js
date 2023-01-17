function validate() {
    var inputs = document.querySelectorAll("#register input, #register input");
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