<!DOCTYPE html>
<html>
<head>
    <title>TF | WORKS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/style/style.css">
  <link rel="stylesheet" href="/style/work.css">
</head>
<script src = "/script.js"></script>

<body>

  <!-- slide upon clicking "Detail" -->

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/templates/header.php";
include_once($path);
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/templates/work-box.php";
include_once($path);
?>
  <div class="container">

 <?php workBox('IoT Project', 'An Iot system consisting of a Google Home Mini and ESP8266', 'https://source.unsplash.com/700x700/?tech')?>
  <?php workBox('NASA: PRANDTL-D', 'Some placeholder text unrelavent to the title', 'https://source.unsplash.com/700x701/?tech')?>
 <?php workBox('Test', 'Some text', 'https://source.unsplash.com/700x702/?tech')?>

  </div>
</body>

</html>
<script>function genericLoad(){
};
</script>
