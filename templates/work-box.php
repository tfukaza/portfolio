<?php
function workBox($Title, $Text, $imgUrl){
?>

<div class = "work">
  <div class = "work-frame"></div>


  <div class = "image work-thumbnail">
    <div class="load-cover">

    <div class="load-bar"></div>
    <div class="load-bar"></div>
    <div class="load-bar"></div>
    <div class="load-bar"></div>
      <h3>LOADING</h3>
  </div>
    <img class = "lazyload" data-src="<?php echo $imgUrl ?>">
  </div>



  <div class = "work-title">
    <h3><?php echo $Title ?></h3>
    <div class = "dot"></div>
    <div><p><?php echo $Text ?></p></div>
    <a class="work-button">
      <p>DETAILS</p>
    </a>
  </div>
</div>


<?php
}?>
