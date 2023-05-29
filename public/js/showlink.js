let nav = document.getElementById("navLinks");
function showMenu() {
  nav.style.right = "0";
}
function hideMenu() {
  nav.style.right = "-200px";
}

var i = 0;
function changeimg() {
  let firstheading = [
    `<h2>We  provide</span><span style='color:red'> technology solutions </span> to ambitious ventures.</h2>`,
    `<h2> Customised<span style='color:red'> Software </span>solutions.</h2>`,
    `<h2>Be prepared for the best  <span style='color:red'>IT Services. </span></h2>`,
  ];
  let firstPara = [
    "<span style='color:yellow'>Grow your business with us.</span>",
    "<span style='color:yellow'>Shape your software according to your need.</span>",
    "<span style='color:yellow'>24x7 assistance with our experts.</span>",
  ];
  let img = ["images/img.jpg", "images/customised.jpg", "images/services.jpg"];
  let imgurl = document.getElementById("imgslide");
  let heading = document.getElementById("mainheading");
  let para = document.getElementById("mainPara");

  var length = img.length;
  if (i > length - 1) {
    i = 0;
  }
  heading.innerHTML = firstheading[i];
  para.innerHTML = firstPara[i];
  imgurl.src = img[i];
  i++;
  setTimeout(changeimg, 4000);
}


let text = document.getElementsByClassName('read-more-text');
function help(rajesh){
  text[rajesh.id].classList.toggle('show');
}