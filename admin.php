<?php
require_once 'inc/header_in.php';

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-5">
                <h2>Add a flower</h2>
                <!--            30-->
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row"><input required  type="text" name="name"  class="form-control" placeholder="Flower name"></div>
                    <div class="mb-3 row"><input required  type="text" name="category"  class="form-control" placeholder="category"></div>
                    <div class="mb-3 row"><input  required type="number" name="price"  class="form-control" placeholder="price e.g 12.5" step="0.01"></div>
                    <div class="mb-3 row"><label for="photo">Flower Photo</label>
                        <input required  type="file" name="photo"  class="form-control" id="photo"></div>
                    <div class="mb-3 row"><textarea name="instructions" id="" cols="30" rows="10" placeholder="instructions" required class="form-control"></textarea></div>
                    <div class="mb-3 row"><button type="submit" name="submit" class="btn btn-primary">Add</button></div>

                </form>
            </div>
        </div>
    </div>


<?php
require_once 'inc/footer_inc.php';