<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/profile.css">
</head>
<script src = "script.js"></script>

<body>
  <div class="container">
<?php
include 'templates/header.php';
?>
<div class = "background-profile">

<div class = "profile-image">
</div>
<div id="profile-head">
 <h3>An engineer with a passion for art</h3>
</div>
<div class = "profile-text">
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque nibh felis, placerat sed pharetra eu, laoreet et massa.
    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
    Nam eleifend eros ut dolor vestibulum imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
     pretium gravida nunc, non cursus mauris porta vel. Pellentesque pharetra ipsum sed neque porttitor, eget fer</p>
</div>

</div>
<div class = "background-profile">
  <div class="icons" id="web">
      <?php programDiv("Blender","5") ?>

  </div>


</div>




<div class = "background-profile">


</div>
</div>

</body>

</html>

<?php
function programDiv($name, $level){
?>
  <div class = "icon-container">
    <!--<img src="<?php echo $url ?>">-->
    <h4><?php echo $name ?></h4>
    <div class = "level <?php echo $level ?>">

    </div>
  </div>

  <?php
}?>
