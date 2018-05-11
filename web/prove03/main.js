function addToSession(event) {
    // Get the src of the image
    var xhttp = new XMLHttpRequest();
    let name = event.target.name;
    let value = event.target.value;

    console.log(name);
    console.log(value);
    
    xhttp.open("POST", "add.php", true);
    xhttp.send(`${name}=${value}`);
    console.dir(xhttp);
}

var formInputs = document.getElementsByClassName("unit-input");
for (var i = 0; i < formInputs.length; i++) {
    formInputs[i].addEventListener("click", (event) => addToSession(event));
}