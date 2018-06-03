var addProject = document.getElementById("add-project");
addProject.addEventListener("click", function(event) {
   let newForm = document.createElement('form');
    newForm.setAttribute("action", "<?php echo htmlspecialchars($_SERVER[\"PHP_SELF\"]);?>");
    newForm.setAttribute("method", "post");
    let newTextInput = document.createElement('input');
    newTextInput.setAttribute("type", "text");
    newTextInput.setAttribute("name", "project-name");
    let newSubmit = document.createElement('input');
    newSubmit.setAttribute("type","submit");
    newSubmit.setAttribute("value", "add");
    newForm.appendChild(newTextInput);
    newForm.appendChild(newSubmit);
    event.target.parentElement.appendChild(newForm);
    event.target.parentElement.removeChild(event.target.querySelector('a'));
});