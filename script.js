var mobileMenu;

window.onload = function() { //when page loads, aka after html is loaded
 //load the burger menu
 mobileMenu= document.getElementsByClassName('header-mobile')[0];

  //fire onload in other scripts;
  genericLoad();

  var headerButtons = document.getElementsByClassName('header-button'); //identify the buttons
  Array.from(headerButtons).forEach(function(e) { //for each button, add event listeners
    e.addEventListener('mousedown', function() {
      this.classList.add('clicked');
    });
    e.addEventListener('mouseover', function() {
      var fades = document.getElementsByClassName('header-button');
      Array.from(fades).forEach(function(i) {
        i.classList.add('fade');
      });
      this.classList.remove('fade');
      this.id = 'select';
    });
    e.addEventListener('mouseout', function() {
      var fades = document.getElementsByClassName('fade');
      Array.from(fades).forEach(function(i) {
        i.classList.remove('fade');
      });
      var bars = document.getElementsByClassName('bar');
      Array.from(bars).forEach(function(i) {
        i.style.height = '0px';
      });
      this.id = '';
    });
    e.addEventListener('mousemove', function(event) {
      //console.log((event.clientX - this.getBoundingClientRect().left) + ":" + this.getBoundingClientRect().left);
      /*var btn = document.getElementById('select');
      var nodes = btn.childNodes;
      nodes[1].style.left = 50 + ((event.clientX - this.getBoundingClientRect().left - (this.offsetWidth / 2)) / 20) + '%';
      */ //btn.style.transform = "rotate3d(0, 1, 0," + ((event.clientX - this.getBoundingClientRect().left - (this.offsetWidth / 2)) / 5) + "deg)";
      var bars = document.getElementsByClassName('bar');
      Array.from(bars).forEach(function(i) {
        i.style.height = Math.max(25 - Math.abs(event.clientX - i.getBoundingClientRect().left) / 2, 0) + 'px';
      });
    });
  });

  //set up mobile menu hamburger
  document.getElementsByClassName('hamburger')[0].addEventListener('touchstart', hamburgerPress, false);
  //load images
  var lazyImages = document.getElementsByClassName('lazyload');

  Array.from(lazyImages).forEach(function(img) { //for each image
    img.setAttribute('src', img.getAttribute('data-src')); //set the image source code to url spesified in data-src
    //img.onload = imgLoaded;
    img.addEventListener('load', imgLoaded);
  });
}
//functions
function hamburgerPress(e) {
  if (mobileMenu.id == 'closed') {
    mobileMenu.id = 'opened';
  }
  else{
      mobileMenu.id = 'closed';
  }
}


function imgLoaded() { //add function that is fired when the image finished loading
  this.removeAttribute('data-src'); //we wont need this anymore is the image loads

  /*
     var loadImg = this.parentElement.parentElement.getElementsByClassName('image');
     Array.from(loadImg).forEach(function(i) { //indicate the image has been loaded
       i.classList.add('loaded');
     });
     */
  this.parentElement.classList.add('loaded');
}

function hoverFollow(e) {

}
