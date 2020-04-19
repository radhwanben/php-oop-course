<?php
  if(!defined('RESTRICTED'))exit('No direct script access allowed!');
?>

        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Writers
                </div>
                <div class="panel-body">
                    <?php flash('writer_flash'); ?>
                    <form class="form-horizontal" method="post" action="<?php echo $baseUrl; ?>index.php?page=writers&action=storemultiple">
                    <h2 class="text-center">Writer</h2>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Email" name="email" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                      </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Biography</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" placeholder="Biography" name="biography">
                            </div>
                          </div>

                        <hr>
                        <h2 class="text-center">Writer</h2>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Email" name="email" required></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Biography</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Biography" name="biography">
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
