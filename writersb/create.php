<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
?>

        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Create Writer
                </div>
                <div class="panel-body">
                    <?php flash('writer_flash'); ?>
                    <form class="form-horizontal" method="post" action="<?php echo $baseUrl; ?>index.php?page=writers&action=store" id="writer-form">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Email writer" name="email" id="email" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Address" name="address" id="address" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Biography</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Biography" name="biography" id="biography" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                          <a href="<?php echo $baseUrl; ?>index.php?page=writers" class="btn btn-default btn-sm">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
