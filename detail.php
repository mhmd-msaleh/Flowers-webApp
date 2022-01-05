<?php
$connection = mysqli_connect("localhost", "root", "", "flowers_db" );
include "inc/header_in.php";
include('Flower.php');
define("BASE_URL","https://services.hanselandpetal.com/photos/");
?>

<div class="row">
  <?php
  if(isset($_GET["id"])):
    $id = $_GET["id"]; 
    $flower_obj = new Flower(); 
    $flower = $flower_obj->getFlower($id, $connection);
    print_r($flower);
    echo $flower['productID'];
  ?>
  "<div class="col-md-6 col-lg-4">";
    <div class="card">
      <img src=<?php echo BASE_URL.$flower['photo']; ?> class="card-img-top" alt="california_snow.jpg">
      <div class="card-body">
        <h5 class="card-title"><?php echo $flower['name'] ?></h5>
        <h5 class="card-subtitle"><?php echo $flower['price']?>$</h5>
        <p class="card-text"><?php echo $flower['instructions']?></p>
      </div>
    </div>
    <div class="footer">
      <form  action="like.php" method="post">
        <input type="hidden" name="id" value=<?php ?> >
        <button type="submit" class="btn"></button> 

      </form>
    </div>

  </div>
  <?php endif;?>
</div>

<?php
include "inc/footer_inc.php"
?>
