<!DOCTYPE html>
<html>

<head>
  <title>TF | PROFILE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/style/style.css">
  <link rel="stylesheet" href="/style/profile.css">
  <link rel="icon" type="image/png" src="/img/Favicon.png">
</head>
<body>

    <?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/templates/header.php";
include_once($path);
?>
  <div class="section">
      <div class="container" id="profile-container">

        <div class="image profile-image" id='portfolio-img-left'>

          <div class="load-cover">
              <div class="load-bar"></div>
              <div class="load-bar"></div>
              <div class="load-bar"></div>
              <div class="load-bar"></div>
              <h3>LOADING</h3>
            </div>

            <img class = "lazyload" data-src="https://source.unsplash.com/900x1500/?white">

          </div>

            <div class="image profile-image" id='portfolio-img-right'>
              <div class="load-cover">

              <div class="load-bar"></div>
              <div class="load-bar"></div>
              <div class="load-bar"></div>
              <div class="load-bar"></div>
              <h3>LOADING</h3>

            </div>
              <img class = "lazyload" data-src="/img/construction.svg" alt="https://source.unsplash.com/500x500/?tech">
                </div>

        <div id="profile-head">

          <div id="geek">

          </div>
          <div id="and"><span></span>
            <span></span></div>
          <div id="art">
          

          </div>
        </div>
          </div>
        <div class="profile-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nibh felis, placerat sed pharetra eu, laoreet et massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam eleifend eros ut
            dolor vestibulum imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. pretium gravida nunc, non cursus mauris porta vel. Pellentesque pharetra ipsum sed neque porttitor, eget fer</p>
        </div>



</div>
  <div class="section">

          <h4><span>S</span><span>K</span><span>I</span>LLS</h4>

<!--noob, medi, good, confident, master-->
<div id="skill-select">

<div id = "left">
        <div class="icons" id="software">
            <div class = "icon-header"></div>

            <h4>Languages</h4>
          <?php programDiv("C/C++","confident") ?>
          <?php programDiv("Java","confident") ?>
          <?php programDiv("Python","confident") ?>
          <?php programDiv("MATLAB","good") ?>
          <div class="dot"></div>
            <div class="dot"></div>
              <div class="dot"></div>
  <h4>Editors</h4>
            <?php programDiv("Visual<br>Studio","confident") ?>
            <?php programDiv("Vim","good") ?>
              <?php programDiv("Atom","confident") ?>

        </div>


        <div class="icons" id="hardware">
          <div class = "icon-header"></div>
          <h4>Platforms</h4>
          <?php programDiv("Arduino","master") ?>
          <?php programDiv("Rasp. Pi","confident") ?>
          <?php programDiv("ESP8266","confident") ?>
          <div class="dot"></div>
            <div class="dot"></div>
              <div class="dot"></div>
                <h4>Tools</h4>
            <?php programDiv("Solid<br>works","good") ?>
          <?php programDiv("Eagle","noob") ?>

        </div>
        <div class="icons" id="service">
          <div class = "icon-header"></div>
          <h4>AWS</h4>
          <?php programDiv("Shadow","master") ?>
          <?php programDiv("Lambda","confident") ?>
          <div class="dot"></div>
            <div class="dot"></div>
              <div class="dot"></div>
              <h4>Firebase</h4>
          <?php programDiv("Function","master") ?>
            <?php programDiv("Storage","confident") ?>
            <div class="dot"></div>
              <div class="dot"></div>
                <div class="dot"></div>
                <h4>CODE</h4>
            <?php programDiv("GitHub","good") ?>



        </div>
      </div>
<div id = "right">
        <div class="icons" id="web">
          <div class = "icon-header"></div>
          <?php programDiv("HTML","master") ?>
          <?php programDiv("CSS","confident") ?>
          <?php programDiv("JS","confident") ?>
          <?php programDiv("PHP","good") ?>
          <?php programDiv("MySQL","noob") ?>

        </div>
        <div class="icons" id="design">
            <div class = "icon-header"></div>
          <?php programDiv("Blender","master") ?>
          <?php programDiv("Maya","good") ?>
          <?php programDiv("Photoshop","master") ?>
          <?php programDiv("Inkscape","master") ?>
          <div class="dot"></div>
          <?php programDiv("Unreal Eng.","confident") ?>
          <?php programDiv("Unity","confident") ?>


</div>
</div>


      </div>


        </div>







      <div class="section">
           <h1>Some footer stuff (awards?)</h1>

      </div>
  </div>

</body>

</html>

<?php
function programDiv($name, $level){
?>
  <div class="icon-container">
    <!--<img src="<?php echo $url ?>">-->
    <h4><?php echo $name ?></h4>
    <div class="level <?php echo $level ?>">

    </div>
  </div>

  <?php
}?>

<script src="/scripts/profile.js"></script>
<script src="/script.js"></script>
