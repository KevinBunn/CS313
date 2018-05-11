function addToSession(event) {
    // Get the src of the image
    let name = event.name;
    let value = event.value;

    // Send Ajax request to backend.php, with src set as "img" in the POST data
    $.post("add.php", {name: value});
}

var formInputs = document.getElementsByClassName("unit-input");
for (var i = 0; i < formInputs.length; i++) {
    formInputs[i].addEventListener("click", (event) => addToSession(event));
}
                            