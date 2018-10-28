<script src="//cdn.jsdelivr.net/npm/velocity-animate@2.0/velocity.min.js"></script>
<script src="/scripts/lib/tuna.js"></script>
<div class = "header">
  <div class = "home header-button">
    <a href="/index.php">
    <img src="/img/Logo.svg">
  </a>
  </div>
<ul id="header-desktop">
  <?php
  button('PROFILE');
    button('RESUME');
  button('WORKS');
  //button('CONTACT');
  ?>
</ul>
<div class="header-mobile" id="closed">
<ul>
  <li>
    <a href = "/pages/PROFILE.php"><p>PROFILE</p></a>
  </li>
  <li>
    <a href = "/pages/RESUME.php"><p>RESUME</p></a>
<<<<<<< HEAD
  </li>
  <li>
    <a href = "/pages/WORKS.php"><p>WORKS</p></a>
=======
>>>>>>> 123e990d96503c1bca1b71c249c7e1e2343be3b1
  </li>
  <li>
    <a href = "/pages/WORKS.php"><p>WORKS</p></a>
  </li>
</ul>
</div>
<div class="hamburger">
<span></span>
<span></span>
<span></span>
</div>
</div>






<?php
function button($Text){
  ?><li class = "header-button">
    <div class = "geometry">
          <span class = "top-left"></span>
            <span class = "top-right"></span>
              <span class = "bottom-left"></span>
                <span class = "bottom-right"></span>
    </div>


      <div class = "bars">
  <?php
  for($i = 0; $i <= 6; $i++){
?>
      <span class = "bar bar-top" style = "left:<?php echo 56 + $i * 28 ?>px;"></span>
      <span class = "bar bar-bottom" style = "left:<?php echo 56 + $i * 28 ?>px;"></span>

    <?php
  }
    ?>
      </div>


    <a href = "<?php
    #$path = $_SERVER['DOCUMENT_ROOT'];
    $path = "/pages/";
    $path .= $Text;
     echo $path
     ?>.php"><p><?php echo $Text ?></p></a>
  </li>
<?php
}

function lazyImage($src, $id){
  ?>
  <div class="image" id='<?php echo $id?>'>
    <div class="load-cover">
        <div class="load-bar"></div>
        <div class="load-bar"></div>
        <div class="load-bar"></div>
        <div class="load-bar"></div>
        <h3>LOADING</h3>
      </div>
      <img class = "lazyload" data-src="<?php echo $src?>" alt="https://source.unsplash.com/500x500/?tech">
    </div>


  <?php
}










?>
