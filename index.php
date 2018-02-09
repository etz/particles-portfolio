<?php
###########################
#           Main          #
###########################
$title = "Nine"; //Your site title here! P.S: this is what shows up in your browser tab!
$songcount = "5"; //Number of songs you've put in /songs. Songs must be titled "1.mp3", "2.mp3", sequentially.
$name = "Nine"; //What name do you want to appear on your page?
$backgroundimage = ""; //Location of the background image(if applicable)!
$backgroundcolor = "white"; //Only change this if you do not plan to use an image. If using an image, change this setting to "inherit".

###########################
#          Links          #
###########################
$url1title = "Instagram"; //Your first external link's title? (e.g. Instagram, Twitter)
$url1 = "#"; //The actual URL to the above link!

$url2title = "Twitter"; //Your second external link's title? (e.g. Instagram, Twitter)
$url2 = "#"; //The actual URL to the above link!

$url3title = "Soundcloud"; //Your third external link's title? (e.g. Instagram, Twitter)
$url3 = "#"; //The actual URL to the above link!

$divider = "~"; // The divider between your links!


/*
To modify the matrix colors, go to /assets/js/custom.ms.js (Change on refresh is disabled by default)
To modify the glitch colors, go to line 103 and the subsequential.

*/
//Don't Touch!
$RAND = rand(1,$songcount);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body id="particles-js">
<script src="assets/js/particles.jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="assets/js/custom.min.js"></script>
<audio id="music" preload="true" loop autoplay>
<source src="songs/<?php echo($RAND); ?>.mp3">
</audio>

<!-- VOLUME + PLAY BUTTON -->
<div class="trans">
<div id="audioplayer"><button id="pButton" class="pause" onclick="play()"></button>  <div id="playhead"></div></div>
<div class="volume" title="Set volume"> <span class="volumeBar"></span></div>
</div>
<script src="assets/js/pausevol.js"></script>
<!-- END -->

<!-- MODIFIABLE CSS -->
<style>
  body {
  background-image: url('<?php echo $backgroundimage; ?>');
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-color: <?php echo($backgroundcolor); ?>;
  background-position: right top;
  background-attachment: fixed;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-weight: bold;
  -ms-user-select: none;
  -webkit-user-select: none;
}

#container {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
}

.glitch {
  color: black;
  font-size: 105px;
  position: relative;
  margin: 0 auto;
  /*border-bottom: 8px solid black;*/
}

.glitch:after {
  left: 2px;
  text-shadow: -1px 0 #ADD8E6;
  background-color: <?php echo($backgroundcolor); ?>;
  animation: noise-anim 2s infinite linear alternate-reverse;
}

.glitch:before {
  left: -2px;
  text-shadow: 1px 0 blue;
  animation: noise-anim-2 3s infinite linear alternate-reverse;
  background-color: <?php echo($backgroundcolor); ?>;
}

h1 {
  position: absolute;
  top: 53%;  
  left: 42%;
  font-style: italic;
  font-size: 11px;
  text-decoration: none;
  color: #D3D3D3;
}

a {
  text-decoration: none;
  color: grey;
}
a:hover {
  color: white;
  text-decoration: none;
}
#audioplayer{
  position: absolute;
  width: 1px;
  height: 1px;
}

#pButton{
    position: fixed;
    bottom: 0;
    right: 0;
    height:60px; 
    width: 60px;
    border: none;
    background-size: 50% 50%;
    background-repeat: no-repeat;
    background-position: center;
    outline:none;
}

.play{background: url('assets/play.png') ;}
.pause{background: url('assets/pause.png') ;}
/* VOLUME BAR CSS */

/* volume bar */
 .volume {
    position: absolute;
    bottom: 5px;
    right: 3%;
    cursor: pointer;
    margin: 1%;
    width: 20%;
    height: 20px;
    background-color: #000;
}
.volumeBar {
    display:block;
    height:20px;
    position:absolute;
    top:0;
    left:0;
    background-color:#fff;
    z-index:10;
    width: 100%;
}
.volume3 {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 0 50px 100px;
    border-color: transparent transparent #007bff transparent;
    line-height: 0px;
    _border-color: #000000 #000000 #007bff #000000;
    _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
}
.trans {
  opacity: 0.1;
  -moz-transition: all 0.8s ease-out;  /* FF4+ */
  -o-transition: all 0.8s ease-out;  /* Opera 10.5+ */
  -webkit-transition: all 0.8s ease-out;  /* Saf3.2+, Chrome */
  -ms-transition: all 0.8s ease-out;  /* IE10? */
  transition: all 0.8s ease-out;  
}
.trans:hover {
  opacity: 1;
  -moz-transition: all 0.8s ease-out;  /* FF4+ */
  -o-transition: all 0.8s ease-out;  /* Opera 10.5+ */
  -webkit-transition: all 0.8s ease-out;  /* Saf3.2+, Chrome */
  -ms-transition: all 0.8s ease-out;  /* IE10? */
  transition: all 0.8s ease-out;  
}
    </style>
        <script src="/assets/js/prefixfree.min.js"></script>
  </head>
  <body>
    <div id="sound-btn"></div>
<div id="container">
  <div class="glitch" data-text="<?php echo $name;?>"><?php echo $name;?></div>
  <br />
  <center>
</div>
<h1>Find me at <a href="<?php echo $url1; ?>"><?php echo $url1title; ?></a> <?php echo $divider; ?> <a href="<?php echo $url2; ?>"><?php echo $url2title; ?></a> <?php echo $divider; ?> <a href="<?php echo $url3; ?>"><?php echo $url3title; ?></a>
</body>
<!--Created by tnadzieja, referencable here: https://github.com/tnadzieja/particles-portfolio-->
</html>