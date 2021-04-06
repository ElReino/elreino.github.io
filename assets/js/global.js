function randomImage(){
  var images = [
   'https://raw.githubusercontent.com/MaripossaGC/maripossagc.github.io/master/assets/img/splash_1.png',
   'https://raw.githubusercontent.com/MaripossaGC/maripossagc.github.io/master/assets/img/splash_2.png',
   'https://raw.githubusercontent.com/MaripossaGC/maripossagc.github.io/master/assets/img/splash_3.png',
   'https://raw.githubusercontent.com/MaripossaGC/maripossagc.github.io/master/assets/img/splash_4.png'];


  var size = images.length;
  var x = Math.floor(size * Math.random());
  console.log(x);
  var element = document.getElementsByClassName('bf-main');
  console.log(element);
  element[0].style["background-image"] = "url("+ images[x] + ")";
}

document.addEventListener("DOMContentLoaded", randomImage);