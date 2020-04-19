<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
?>
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Edit Article
                </div>
                <div class="panel-body">
                <?php
                    $data = $model->getDataById(@$_GET['id']);
                ?>
                    <form class="form-horizontal" method="post" action="<?php echo $baseUrl; ?>index.php?page=articles&action=update">
                    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Title" name="title" required value="<?php echo $data->title; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Content article" name="content" required><?php echo $data->content; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">magazine</label>
                        <div class="col-sm-10">
                        <?php
                          $data = $modelMagazin->getDataById($data->magazine) ;  
                        ?>
                        <select class="form-control" id="magazine" name="magazine">
                        <option value='<?php echo $data->id;?>'><?php echo $data->title  ?></option>
                                <?php
                                      $statement = $modelMagazin->getData();
                                      foreach ($statement as $magazines) {
                                        ?>
                                <label for="writesnames">magazine</label>
                                      <option value='<?php echo $magazines->id;?>'><?php echo $magazines->title  ?></option>
                                      <?php
                                      }
                                  ?>
                        </select>                        </div>
                      </div>

                      



                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-sm">Update</button>
                          <a href="<?php echo $baseUrl; ?>index.php?page=articles" class="btn btn-default btn-sm">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
   