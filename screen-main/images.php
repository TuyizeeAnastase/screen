<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bank of Africa</title>
<style>
  * {box-sizing: border-box;}
  body {font-family: Verdana, sans-serif;}
  .mySlides {display: none;}
  img {vertical-align: middle;}
  
  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }
  </style>
</head>
    <body>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 12</div>
  <img src="./images/image_1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_3.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_4.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_5.png" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_6.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_7.png" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_8.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_9.png" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_10.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_11.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_12.png" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_13.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_14.png" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 12</div>
  <img src="./images/image_15.jpg" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
</body>
<script>
    setTimeout(function(){
        window.location.href = 'forex.php';
    }, 272000);
    let slideIndex = 0;
showSlides();

    function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
setTimeout(function() {
            window.location.href = "first_forex.php";
        }, 15000);
</script>
</html>
