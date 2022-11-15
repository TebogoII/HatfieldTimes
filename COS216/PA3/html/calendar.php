<!--- Tebogo Thage, u19054018 --->
<!doctype html>
<title>Calendar - Hatfield Times</title>
<style>
  body { text-align: center; padding: 150px; }
  h2 {text-align: center;  text-shadow: 2px 2px #000000; color:#9e0000;}
  h3 {text-align: center;  text-shadow: 2px 2px #000000;}
  body { 
    font: 20px Helvetica, sans-serif; 
    background-image: url('../img/World.webp');
    background-size: length;
    background-attachment: fixed;}
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #9e0000; text-decoration: none; }
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
    background-color: #9e0000;
    color: white;
  }

  /* BACKGROUND  */


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

   /* Dropdown Button */
  .dropbtn {
    background-color: #9e0000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }

  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content:hover {
    color: #9e0000;
  }

  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd;}

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}

  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {background-color: #333333;} 

  /*header*/
  .topper
  {
    margin-top: -100px;
  }



.hidden {
  display: none;
}
</style>
<script type="text/javascript">
  function hideLoadingDiv() {
    document.getElementById('LOADING').classList.remove('hidden')
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

  <div class="center" style="top: 10px">
    <h2 style="color:#9e0000;">Hatfield Times</h2>
    <br>
    <h3 style="color:#ae0000;"><b>CALENDAR<i class="fa-solid fa-calendar"></i></i><b></h3>
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
    
  <style>
    .container {
      height: 200px;
      position: relative;
    }

    .centers {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .center2 {
      margin: 0;
      position: absolute;
      text-align: center;
      left: -68%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
  </style>
 
</article>

<br>

<body>
  <style>
    h5{
      color:  white;
              text-shadow:
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000; 
    }
    .strokeme
    {
        color: white;
        text-shadow:
        -1px -1px 0 #000,
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;  
    }
  </style>

  <head>
  <style>
  * {box-sizing: border-box;}
  ul {list-style-type: none;}
  body {font-family: Verdana, sans-serif;}

  .month {
    padding: 70px 25px;
    width: 100%;
    background: #9e0000;
    text-align: center;
  }

  .month ul {
    margin: 0;
    padding: 0;
  }

  .month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
  }

  .month .prev {
    float: left;
    padding-top: 10px;
  }

  .month .next {
    float: right;
    padding-top: 10px;
  }

  .weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
  }

  .weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
  }

  .days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
  }

  .days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
  }

  .exe {
    padding: 5px;
    background: #9e0000;
    color: white !important
  }

  /* Add media queries for smaller screens */
  @media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
  }

  @media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .exe {padding: 2px;}
  }

  @media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
  }
  </style>
  </head>
  <body>
    <h1 style="color: #9e0000">Calendar</h1>

    <div class="month">      
      <ul>
        <li onclick="left()" class="prev" >&#10094;</li>
        <li onclick="right()" class="next" >&#10095;</li>
        <li>
          <div id="mos">April</div>
          <br>
          <span style="font-size:18px" id="yea">2022</span>
        </li>
      </ul>
    </div>

    <ul class="weekdays">
      <li>Mo</li>
      <li>Tu</li>
      <li>We</li>
      <li>Th</li>
      <li>Fr</li>
      <li>Sa</li>
      <li>Su</li>
    </ul>

    <ul class="days" id="add">  
      <!--DAYS-->
    </ul>

  </body>
</body>
  
  <script>
    var today = new Date();
    var day = today.getDate();
    var month = today.getMonth()+1;
    var year = today.getFullYear();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    console.log(day);
    console.log(month);
    console.log(year);
    console.log("---------");
    var curr=null;
  </script>

  <script>
    function clickup(x){
      hideLoadingDiv();
      //console.log(x);
      if (curr!=null) 
      {
        var v = document.getElementById(curr);
        v.classList.remove("exe");
      }
      curr=x.id;
      var el = document.getElementById(curr);
      el.classList.add("exe");
      var d = el.innerHTML;
      var published_on = year+'-'+(month).toString().padStart(2, '0')+'-'+(d).toString().padStart(2, '0');
      console.log(published_on);
      pubdate(published_on);
    }
  </script>

  <script>
    var ms=['January','February','March','April','May','June','July','August','September','October','November','December'];
    var md=[31,28,31,30,31,30,31,31,30,31,30,31];
    function left()
    {
      if (month=="01")
      {
        month="12";
        year--;
      }
      else month--;
      console.log(month);
      var v = document.getElementById("mos");
      v.innerHTML=ms[month-1];
      v = document.getElementById("yea");
      v.innerHTML=year;
      pop(year,month);
    }

    function right()
    {
      if (month=="12")
      {
        month="01";
        year++;
      }
      else month++;
      console.log(month);
      var v = document.getElementById("mos");
      v.innerHTML=ms[month-1];
      v = document.getElementById("yea");
      v.innerHTML=year;
      pop(year,month);
    }

    function pop(y,m) 
    {
      var arr = [];
      var weekday = new Date(y + "-" + m + "-01").getDay();
      if (weekday==0) 
      {
        weekday=7;
      }
      var j=0;
      for (var i = 0; i < 42; i++) {
        arr[i]='';
      }
      for (var i = weekday-1; i < weekday+md[m-1]-1; i++) 
      {
        j++;
        arr[i]=j;
      }
      const box = document.getElementById('add');
      var wd= ["Mo","Tu","We","Th","Fr","Sa","Su"];
      j=0;
      var x=0;
      box.innerHTML="";
      for (var i = 0; i < 42; i++) 
      {
        if (j==7) 
        {
          j=0;
          x++;
        }
        var str=wd[j]+x;
        j++;
        if (arr[i]==day && curr==null) 
        {
          curr=str; 
          box.innerHTML+=`<li class="exe" onclick="clickup(`+str+`)" id="`+str+`">`+arr[i]+`</li>`;
        }
        else box.innerHTML+=`<li onclick="clickup(`+str+`)" id="`+str+`">`+arr[i]+`</li>`;
        //console.log(box.innerHTML);
      }
    }
    pop(year,month)
  </script>

  <body onload="hideLoadingDiv()">
    <div class="LOADING" id="LOADING" name="LOADING"><img src="../img/load.svg" style="width:100px;height:100px;"></div>
  </body>
  
  <br><br><br>
  <div id="news"></div>
  <div id="news1"></div>
  <div id="news2"></div>
  <div id="news3"></div>
  <div id="news4"></div>
  <script src="../js/news.js"></script>

<?php include "../php/footer.php";?>