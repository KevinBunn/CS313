function addToSession(event) {
    console.dir(event);
}

var formInputs = document.getElementsByClassName("unit-input");
for (var i = 0; i < formInputs.length; i++) {
    formInputs[i].addEventListener("click", (event) => addToSession(event));
}
                            