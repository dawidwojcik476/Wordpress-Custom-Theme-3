const menuBtn = document.querySelector('.header__ham');
  const mainMenu = document.querySelector('.header__menu');


  
  let menuOpen = false;
  
  const menu = () => {
      if (!menuOpen) {
          menuBtn.classList.add('open');
          mainMenu.classList.add('open');
          menuOpen = true;
      } else {
          menuBtn.classList.remove('open');
          mainMenu.classList.remove('open');
          menuOpen = false;
      }
  }
   
  menuBtn.addEventListener('click', menu);


  var getUrl = window.location;
  var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

console.log(baseUrl);

window.onscroll = function() {myFunction()};

const header = document.querySelector(".header");

// Get the offset position of the navbar
const sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}