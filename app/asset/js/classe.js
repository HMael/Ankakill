let container = document.querySelector('.container-drop');
  let links = [];
  container.querySelectorAll('a').forEach(link => {
    links.push(link.innerText);
  });
  links.sort();

 container.innerHTML = '';
  links.forEach(linkText => {
    let link = document.createElement('a');
    link.href = '#';
    link.innerText = linkText;
    container.appendChild(link);
  });