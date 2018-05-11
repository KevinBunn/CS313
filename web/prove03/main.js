function addToSession(event) {
    alert("clicked!")
}

var formInputs = document.getElementsByClassName("unit-input");
formInputs.addEventListener("click", (event) => addToSession(event));
                            