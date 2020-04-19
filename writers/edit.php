<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
?>
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Edit Writer
                </div>
                <div class="panel-body">
                <?php
                    $data = $model->getDataById(@$_GET['id']);
                ?>
                    <form class="form-horizontal" method="post" action="<?php echo $baseUrl; ?>index.php?page=writers&action=update">
                    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Name" name="name" required value="<?php echo $data->name; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Email writer" name="email" required><?php echo $data->email; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $data->address; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Biography</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Biography" name="biography" required value="<?php echo $data->biography; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-sm">Update</button>
                          <a href="<?php echo $baseUrl; ?>index.php?page=writers" class="btn btn-default btn-sm">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
