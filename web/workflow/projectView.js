var addCategory = document.getElementById("add-category");
addCategory.addEventListener("click", function(event) {
  let newForm = document.createElement('form');
    newForm.setAttribute("action", "add_category.php?project=<?php echo $project_id?>");
    newForm.setAttribute("method", "post");
    let newTextInput = document.createElement('input');
    newTextInput.setAttribute("type", "text");
    newTextInput.setAttribute("name", "category-name");
    let newLabel = document.createElement('label');
    newLabel.setAttribute("for","cateogry-name");
    newLabel.innerHTML = "Category Name:";
    let newSubmit = document.createElement('input');
    newSubmit.setAttribute("type","submit");
    newSubmit.setAttribute("value", "add");
    newForm.appendChild(newLabel);
    newForm.appendChild(newTextInput);
    newForm.appendChild(newSubmit);
    event.target.parentElement.parentElement.appendChild(newForm);
    event.target.parentElement.parentElement.removeChild(event.target.parentElement);
});

var statusFields = document.getElementsByClassName("task-status");

for (statusField of statusFields) {
  let status = statusField.innerHTML;
  switch (status) {
    case "Open":
        statusField.style.backgroundColor = "#FF6E00";
        break;
    case "Test":
        statusField.style.backgroundColor = "#F8D801";
        break;
    case "Complete":
        statusField.style.backgroundColor = "#45E629";
        break;
    default:
        console.log("you're all noobs");
  }
}

function addNewCategory(project_id) {
  xhttp.open("POST", "add_category.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
}