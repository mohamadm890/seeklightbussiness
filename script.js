const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

var check = document.querySelector(".check");
check.addEventListener('click',idioma);

function  idioma()  {
  let id  = check.checked;
  if(id == true){
    location.href="france.html";
  } 
}


var check1 = document.querySelector(".check1");
check1.addEventListener('click',idiomaA);

function  idiomaA()  {
  let id  = check1.checked;
  if(id == true){
    location.href="index.html";
  } 
}