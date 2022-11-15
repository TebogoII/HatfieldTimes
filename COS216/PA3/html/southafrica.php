<!--- Tebogo Thage, u19054018 --->
<!doctype html>
<title>South Africa - Hatfield Times</title>
<style>
  body { text-align: center; padding: 150px; }
  h2 {text-align: center;  text-shadow: 2px 2px #000000; color:#006400;}
  h3 {text-align: center;  text-shadow: 2px 2px #000000;}
  body { 
    font: 20px Helvetica, sans-serif; 
    background-image: url('../img/southafrica.webp');
    background-attachment: fixed;}
  .bg-image {filter: blur(8px); -webkit-filter: blur(8px);}
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
  h1 {text-align: center;}
  /*NAV BAR*/
  /* Add a black background color to the top navigation */
  .topnav {
    background-color: #333;
    overflow: hidden;
  }

  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #006400;
    color: white;
  }

  /* BACKGROUND  */

  @keyframes fadeInAnimation {
      0% {
          opacity: 0;
      }
      100% {
          opacity: 1;
       }
  }

  /*Search*/
  .topnav input[type=text] 
  {
    float: right;
    padding: 5px;
    border: none;
    margin-top: 8px;
    margin-right: 2px;
    font-size: 17px;
  }

  /*font*/
  @font-face 
  {
    font-family: Canterbury; 
    src: url("../Canterbury.ttf");
  }

  /*header*/
  .topper
  {
    margin-top: -100px;
  }

  /* Tooltip container */
  .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
  }

  /* Tooltip text */
  .tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;

    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
  }

  /* Show the tooltip text when you mouse over the tooltip container */
  .tooltip:hover .tooltiptext {
    visibility: visible;
  }
.hidden {
  display: none;
}
</style>
<script type="text/javascript">
  function hideLoadingDiv() {
  setTimeout(function(){
    document.getElementById('LOADING').classList.add('hidden');
  },5000)
}
</script>

<head> 
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico"> 
   <script src="https://kit.fontawesome.com/633bb9df8f.js" crossorigin="anonymous"></script>
</head>

<header class="topper">

  <div class="center">
    <h2 style="color:#006400;">Hatfield Times</h2>
    <br>
    <h3 style="color:#006400;"><b>SOUTH AFRICA<b></h3>
    <style>
      h2 {
           font-family: Canterbury;
           font-size: 100px;
        }
      h1 {
           font-family: Canterbury;
           font-size: 150px;
        }
    </style>
  </div>  
</header>

<article>
    <?php include "../php/header.php";?>

  <!-- <div>
    <ul>
      <style> ul{text-align: center; style="color:#9e0000;" text-shadow: 2px 2px #000000;}</style>
      <li>Accurate</li>
      <li>Impartial</li>
      <li>Unbiased</li>
    </ul>
  </div> -->

 
</article>

<div>
  <i class="fa-solid fa-newspaper"></i>
  <i class="fa-solid fa-headphones"></i>
  <i class="fa-solid fa-earth-africa"></i>
  <i class="fa-brands fa-twitter"></i>
</div>

  <body onload="hideLoadingDiv()">
      <div class="LOADING" id="LOADING" name="LOADING"><img src="../img/gload.svg" style="width:100px;height:100px;"></div>
  </body>

<div id="news"></div>
<div id="news1"></div>
<div id="news2"></div>
<div id="news3"></div>
<div id="news4"></div>
<script src="../js/za.js"></script>
<?php include "../php/footer.php";?>