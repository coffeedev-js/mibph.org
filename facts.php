<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/facts.css">
    <script src="https://kit.fontawesome.com/18267d4626.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <title>Mibph - Facts</title>
  </head>
  <body>
      <div class="sealbgs"></div>
      <div id='cssmenu'>
        <ul>
           <li class='active'><a href='https://www.mibph.org/'> Home <i class="fas fa-home"></i></a></li>
           <li><a href='https://www.mibph.org/facts.html'><i class="fas fa-random"></i> Random Seal facts</a></li>
           <li><a href='https://www.mibph.org/comingsoon.html'><i class="fas fa-address-card"></i> About this website</a></li>
           <li><a href='https://www.mibph.org/comingsoon.html'><i class="fas fa-globe-europe"></i> Other Websites</a></li>
           <li><a href="https://www.mibph.org/comingsoon.html"><i class="fas fa-flask" id="labs"></i> Takolabs</a></li>
        </ul>
      </div>
        <div class="sealcontainment animate__animated animate__fadeInUp">
          <p>Random Seal fact:</p>
          <?php include "getquote.php"; ?>
          <div class="container">
          <div class="center">
        </div>
        <button class="btn" onClick="window.location.reload();">
             <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
               <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
             </svg>
            <span> Draw new</span>
        </button>
         </div>
        </div>
        <br>
        <p>All Seal facts are stored at our Seal Database, which pulls facts from various websites.
        <br>
        While we try to fact check each quote, please understand thaat newer ones might not have been checked yet.
        <br>
        A list with websites that we pull the facts from into our Database will be coming soon.
      </p>
        <footer class="animate__animated animate__fadeInUp">
          <p>Front- and backend developed by xTakoyakii© and RaccoonGuy©</p>
          <p>xTakoyakii© and RaccoonGuy© fall under the Copyright of Takolabs©</p>
          <p>Mibph.org© | 2020</p>
          <a href="https://www.youtube.com/watch?v=YFZJeap_K3U" target="_blank"><p>Imprint & Privacy Policy</p></a>
        </footer>
      <script type="text/javascript" src="JS/main.js"></script>
      <img id="toTop" src="https://alex-web.dev/files/public-docs/arrow.png" onclick="smoothscroll()" title="Go To Top">
  </body>
</html>