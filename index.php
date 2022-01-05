<?php 
  $connection = mysqli_connect("localhost", "root", "", "flowers_db" );

  include 'inc/header_in.php';
  include('Flower.php');
  
  define("BASE_URL","https://services.hanselandpetal.com/photos/");

  $flower_obj = new Flower(); 
  $flowers = $flower_obj->getFlowers($connection);
?>
<div class="row">
<?php while($row = $flowers->fetch_assoc()): ?>
  <div class="col-md-6 col-lg-4">
    <div class="card">
      <img src=<?php echo(BASE_URL.$row["photo"]); ?> class="card-img-top" alt="california_snow.jpg">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
        <h5 class="card-subtitle"><?php echo $row["price"]; ?></h5>
        
        <form name="<?php echo $flower["productID"];?>" action="detail.php" action="get">
          <input type="hidden" name="id" value=<?php echo $row["productID"]; ?>>  
          <input type="submit" name="submit" href="detail.php" class="btn btn-outline-info">
        <form>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</div>

<?php 
include 'inc/footer_inc.php';
?>
