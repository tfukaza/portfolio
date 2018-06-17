window.onload = function(){
var headerButtons = document.getElementsByClassName('header-button');
Array.from(headerButtons).forEach(function(e){
  e.addEventListener('mousedown', function(){
    this.classList.add('clicked');
  });
  e.addEventListener('mouseover', function(){
    var fades = document.getElementsByClassName('header-button');
    Array.from(fades).forEach(function(i){
      i.classList.add('fade');
    });
    this.classList.remove('fade');
    this.id = 'select';
  });
  e.addEventListener('mouseout', function(){
    var fades = document.getElementsByClassName('fade');
    Array.from(fades).forEach(function(i){
      i.classList.remove('fade');
    });
    var bars = document.getElementsByClassName('bar');
    Array.from(bars).forEach(function(i){
      i.style.height = '0px';
    });
    this.id = '';
  });
  e.addEventListener('mousemove', function(event){
    console.log((event.clientX - this.getBoundingClientRect().left) + ":" + this.getBoundingClientRect().left);
    /*var btn = document.getElementById('select');
    var nodes = btn.childNodes;
    nodes[1].style.left = 50 + ((event.clientX - this.getBoundingClientRect().left - (this.offsetWidth / 2)) / 20) + '%';
    *///btn.style.transform = "rotate3d(0, 1, 0," + ((event.clientX - this.getBoundingClientRect().left - (this.offsetWidth / 2)) / 5) + "deg)";
    var bars = document.getElementsByClassName('bar');
    Array.from(bars).forEach(function(i){
      i.style.height = Math.max(25 - Math.abs(event.clientX - i.getBoundingClientRect().left) / 2, 0) + 'px';
    });
  });
});

}

//functions

function hoverFollow(e){

}
