<div class = "header">

<ul>
  <?php
  button('PROFILE');
  button('WORKS');
  button('CONTACT');
  ?>
</ul>

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
    <a href = "<?php echo $Text ?>.php"><p><?php echo $Text ?></p></a>
  </li>
<?php
}
?>
