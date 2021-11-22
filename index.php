<?php 
  include 'inc/header_in.php';
  require_once('flowers.php');
  $flowers_array = Flower::getFlowers();
?>
<div class="row">
<?php foreach($flowers_array as $flower): ?>
  <div class="col-md-6 col-lg-4">
    <div class="card">
      <img src=<?php echo BASE_URL.'/'.$flower["photo"]; ?> class="card-img-top" alt="california_snow.jpg">
      <div class="card-body">
        <h5 class="card-title"><?php echo $flower["name"]; ?></h5>
        <h5 class="card-subtitle"><?php echo $flower["price"]; ?></h5>
        <a href="detail.php" class="btn btn-outline-info">More details</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<?php 
include 'inc/footer_inc.php';
?>
