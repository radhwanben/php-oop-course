<?php
  if(!defined('RESTRICTED'))exit('No direct script access allowed!');
?>

        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Magazines
                </div>
                <div class="panel-body">
                    <?php flash('magazine_flash'); ?>
                    <form class="form-horizontal" method="post" action="<?php echo $baseUrl; ?>index.php?page=magazines&action=storemultiple">
                    <h2 class="text-center">Magazine</h2>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Title" name="title1" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Content magazine" name="content1" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Publisher</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Publisher" name="publisher1">
                        </div>
                      </div>

                    <hr>
                    <h2 class="text-center">Magazine</h2>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Title" name="title2" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Content magazine" name="content2" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Publisher</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Publisher" name="publisher2">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                          <a href="<?php echo $baseUrl; ?>index.php?page=magazines" class="btn btn-default btn-sm">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
