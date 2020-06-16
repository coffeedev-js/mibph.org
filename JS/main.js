

var seal = document.getElementById("seal_normal");
var seal_alien = document.getElementById("seal_alien");
var seal_corrupted = document.getElementById("seal_corrupted");
var seal_holy = document.getElementById("seal_holy");


document.querySelectorAll('.seal_image').forEach(item => {
  item.addEventListener('mouseover', function(){
      this.style = "width: 270px;"
    })
  })

document.querySelectorAll('.seal_image').forEach(item => {
  item.addEventListener('mouseout', function(){
      this.style = "none;"
    })
  })

seal.addEventListener("click", function(){
  var audio = new Audio("Media/mibph_normal.mp3");
  audio.play();
})
seal_alien.addEventListener("click", function(){
  var audio = new Audio("Media/mibph_alien.mp3");
  audio.play();
})
seal_corrupted.addEventListener("click", function(){
  var audio = new Audio("Media/mibph_corrupted.mp3");
  audio.play();
})
seal_holy.addEventListener("click", function(){
  var audio = new Audio("Media/mibph_holy.mp3");
  audio.play();
})

/*Mobilgerate weiterleiten*/
 if (window.screen.width < 1000) {
  window.location = 'm.mibph.org';
}

/*to top button*/
var t1 = 0;
window.onscroll = scroll1;

function scroll1() {
  var toTop = document.getElementById('toTop');
  window.scrollY > 0 ? toTop.style.display = 'Block' : toTop.style.display = 'none';
}

function smoothscroll() {
  var y1 = window.scrollY;
  y1 = y1 - 1000;
  window.scrollTo(0, y1);
  if (y1 > 0) {
    t1 = setTimeout("smoothscroll()", 100);
  } else {
    clearTimeout(t1);
  }
}