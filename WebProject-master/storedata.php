<?php include"_header.php";?>
<h3>
  Register
</h3>
<hr/>
<div class "row">
  <?php
  $string = file_get_contents("data/G4SJSON/json");
  $data = json_decode($string,true);
  foreach($data as $object ){
    foreach($object as $value){
  ?>
  <div class = "col-sn-6 col-md-4">
    <div class = "panel panel-primar">
      <div class="panel-heading">
        <h3 class = "panel-title"><?php echo $value["name"]?></h3>
      </div>
      <div class = "panel body">
        <img src = "<?php echo $value["imageUrl"]?>" alt="...">
        <p>Developer:<?php echo $value["Developer"]?></p>
        <p><a href="a" class="btn btn-primary" role="button">Buy</a></p>
      </div>
    </div>
  </div>
  <?php
    }
  }
?>
</div>

<?php include '_footer.php';?>
