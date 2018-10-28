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
              <img class = "lazyload" data-src="/img/robotarm.png" alt="https://source.unsplash.com/500x500/?tech">
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

          <h2>SKILLS</h2>

<!--noob, medi, good, confident, master-->
<div id="skill-select">

<div id = "left">
        <div class="icons" id="software">
            <div class = "icon-header"></div>
              <?php categoryDiv("Languages", array("C/C++", "Java", "Python"))?>
              <?php categoryDiv("Editors", array("Visual Studio", "Atom", "Vim/Nano"))?>
        </div>
        <div class="icons" id="hardware">
          <div class = "icon-header"></div>
            <?php categoryDiv("Hardware", array("Arduino", "Raspberry Pi", "ESP8266"))?>
             <?php categoryDiv("Tools", array("SolidWorks", "Autodesk Eagle"))?>

        </div>
        <div class="icons" id="service">
          <div class = "icon-header"></div>
         <?php categoryDiv("Amazon Web S.", array("Lambda", "IoT Shadow"))?>
         <?php categoryDiv("Firebase", array( "Functions", "Realtime Storage"))?>
         <?php categoryDiv("Code", array( "Github"))?>



        </div>
    <!--  </div>
<div id = "right">-->
        <div class="icons" id="web">
          <div class = "icon-header"></div>
           <?php categoryDiv("Languages", array("HTML","CSS","JS","PHP"))?>
              <?php categoryDiv("Framework", array("WordPress"))?>

        </div>
        <div class="icons" id="design">
             <?php categoryDiv("ADOBE", array("Photoshop","Illustrator","Design"))?>


             <?php categoryDiv("Modeling", array(   "Blender","Autodesk Maya"))?>





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
  <!--  <div class="level <?php //echo $level ?>">-->

  <!--  </div>-->
  </div>

  <?php
}?>



  <?php
  function categoryDiv($category, $skills){
  ?>
    <div class = "icon-category">
      <h5><?php echo $category; ?></h5>
      <div class="icon-skill">
        <?php
        $c = count($skills);
        for($i = 0; $i < $c; $i++){
  ?>
    <div class="icon-container">

      <h4><?php echo $skills[$i]; ?></h4>

    </div>
  <?php } ?>
</div></div>
    <?php
  }?>

<script src="/scripts/profile.js"></script>
<script src="/script.js"></script>
