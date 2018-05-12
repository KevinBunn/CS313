function addToSession(event) {
    // Get the src of the image
    var xhttp = new XMLHttpRequest();
    let name = event.target.name;
    let value = event.target.value;

    console.log(name);
    console.log(value);
    
    if (name == "Artanis") {
        var checkedValue = document.querySelector('#artanis-check').checked;
        if(checkedValue)
            value = 1;
        else 
            value = 0;
    }
    
    xhttp.open("POST", "add.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`${name}=${value}`);
}

var formInputs = document.getElementsByClassName("unit-input");
for (var i = 0; i < formInputs.length; i++) {
    formInputs[i].addEventListener("click", (event) => addToSession(event));
    formInputs[i].addEventListener("keyup", (event) => addToSession(event));
}