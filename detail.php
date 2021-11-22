<?php
include "inc/header_in.php"
?>

<div class="row">
  <div class="col-md-6 col-lg-4">
    <div class="card">
      <img src="https://services.hanselandpetal.com/photos/california_snow.jpg" class="card-img-top" alt="california_snow.jpg">
      <div class="card-body">
        <h5 class="card-title">Shrubs</h5>
        <h5 class="card-subtitle">price: 15.99,</h5>
        <p class="card-text">"instructions": "Large double. Good grower, heavy bloomer. Early to mid-season, acid loving plants. Plant in moist well drained soil with pH of 4.0-5.5.",
          </p>
        
      </div>
    </div>
    <div class="footer">
      <form action="like.php" method="post">
        <input type="hidden" name="id" value=<?php ?> >
        <button type="submit" class="btn"></button> 
      </form>
    </div>

  </div>
</div>

<?php
include "inc/footer_inc.php"
?>
