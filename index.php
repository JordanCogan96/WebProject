<!DOCTYPE html>
<html>
<head>
  <title>Games 4 Sale</title>
  <link type="text/css" rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <style>
      /* Prevents slides from flashing */
    </style>
    <!-- jQuery library (served from Google) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

    <!-- bxSlider Javascript file -->
    <script src="jquery.bxslider/jquery.bxslider.min.js"></script>

      <script src="js/script.js"></script>



</script>
</head>
<body>
<div class="wholebody">


<div class="empty logo">

</div>
<!-- start the content -->
 <div class="container">
  <div class="second-nav">
    <ul class="container-nav">
      <li><button id="Genre" type="button" name="button"> Genre</button></li>
      <li><button id="Platform" type="button" name="button">Platform </button></li>
      <li><button id="All Games" type="button" name="button">All Games</button></li>
      <li><button id="Sales" type="button" name="button">Sales</button></li>
      <li><button id="Coming Soon" type="button" name="button">Coming Soon</button></li>
    </ul>
  </div>


<!--slider-->
<div class="bxslider">
    <img src="img/WD2V1.png" title="NOW ON SALE">
    <img src="img/DISV1.jpg">
    <img src="img/CODV1.png">
</div>
<!--Slider Finished-->

</div>

<div class="MainContainer">
  <div class="item">
    <img src="GamePics/WD2PS4.jpg" alt="" />
    <br>
    <img src="GamePics/WD2XONE.jpg" alt="" />
    <br>
    <img src="GamePics/FIFAXONE.jpg" alt="" />
    <br>
    <img src="GamePics/FIFAPS4.jpg" alt="" />
    <br>
    <img src="GamePics/GTAXONE.jpg" alt="" />
    <br>
    <img src="GamePics/GTAPS4.jpg" alt="" />
    <br>
    <img src="GamePics/BF1PS4.jpg" alt="" />
    <br>
    <img src="GamePics/BF1XONE.jpg" alt="" />

  </div>


  <?php
  $xmlStr = file_get_contents('G4S.xml');
  $xmlObj = simplexml_load_string($xmlStr);
  $arrXml = objectsIntoArray($xmlObj);
  echo $xmlObj;
  ?>
</div>
</div>


</body>

</html>
