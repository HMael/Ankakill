function displaySelectedContent() {
  var dropdown = document.getElementById("dropdown");
  var selectedOptions = [];

  for (var i = 0; i < dropdown.options.length; i++) {
    if (dropdown.options[i].selected) {
      selectedOptions.push(dropdown.options[i].text);
    }
  }

  var selectedContent = document.getElementById("selected-content");
  selectedContent.innerText = "Contenu sélectionné : " + selectedOptions.join(", ");
}
