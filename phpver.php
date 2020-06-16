<?php

/////////////////////////////////////////////////////////////////////
// This is the only portion of the code you may need to change.
// Indicate the location of your images 
$root = '';
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = 'images/';

// End of user modified section 
/////////////////////////////////////////////////////////////////////
 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}


// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);

$img = getRandomFromArray($imgList);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birbs!</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        .button {
        backface-visibility: hidden;
         position: absolute;
         cursor: pointer;
         display: inline-block;
         white-space: nowrap;
         background: #952;
         border-radius: 6px;
         border: 0px solid #444;
          border-width: 0px 0px 0px 0px;
         padding: 10px 20px 10px 20px;
         color: #fff;
         font-size: 16px;
         font-family: Helvetica Neue;
         font-weight: 900;
         font-style: normal;
         top: 90%;
         left: 50%;
         transform: translate(-50%, -50%);
         z-index: 1;
  }
     .button > div {
     color: #999;
     font-size: 10px;
     font-family: Helvetica Neue;
     font-weight: initial;
     font-style: normal;
     text-align: center;
     margin: 0px 0px 0px 0px
  }
     .button > i {
      font-size: 1em;
     border-radius: 6px;
     border: 1px dashed #fff;
     border-width: 1px 1px 1px 1px;
     padding: 0px 0px 0px 0px;
     margin: 0px 0px 0px 0px;
     position: absolute;
     top: 2px;
     left: 2px;
     bottom: 2px;
     right: 2px
  }
  .button > .ld {
    font-size: initial
  }

  .button:hover {
    background: rgb(158, 106, 67);
  }

  a img { border:none; }
    </style>
</head>
<body>
    <div class="paper">
        <div class="paper-content">
            <p>&nbsp;Hello and welcome! Get yourself a Seal and share it with your friends!</p>
            <p>&nbsp;Click on "Get Seal" to automatically copy it's link!</p>
        </div>
    </div>
    <div class="distance"></div>
    <div class="bg-text">
        <p style="color: white;">Your random Seal:</p>
        <div class="birbimg">
            <div><img src="<?php echo $path . $img ?>" alt="Oof! No Seal has been loaded :(" /></div>
        </div>
    </div>
<a href="https://www.alex-web.dev/birb">    
<div class="button">
  Get Seal!
  <div></div>
  <i class="fa fa-none"></i>
</div>
</a>
<footer>
    <p class="notes">This website is part of <a href="https://www.alex-web.dev/">alex-web.dev!</a> Submit your Seal images <a href="https://www.alex-web.dev/seal/submit">here!</a><p>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
</body>
</html>