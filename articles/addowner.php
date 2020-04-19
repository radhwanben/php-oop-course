<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
?>

        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Add Owners
                </div>
                <div class="panel-body">
                    <?php flash('article_flash'); ?>
                    <form class="form-horizontal" method="post" action="<?php echo $baseUrl; ?>index.php?page=articles&action=addowners" id="article-form">
                      
                      <div class="form-group"> 
                        <label for="inputEmail3" class="col-sm-2 control-label">Articles</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="article" name="article">
                                <?php

                                      $statement = $model->getData();
                                      foreach ($statement as $article) {
                                        ?>
                                <label for="articles">article</label>
                                      <option value='<?php echo $article->id;?>'><?php echo $article->title;  ?></option>
                                      <?php
                                      }
                                  ?>
                        </select>
                      </div>
                      </div>
                      <div class="form-group"> 
                      <label for="inputEmail3" class="col-sm-2 control-label">Owner</label>
                      <div class="col-sm-10">
               
                      <?php

                                $statement = $modelwriters->getData();
                                      foreach ($statement as $writers) {
                                        ?>
                        <input class="form-check-input" type="checkbox"  name="owner[]" value="<?php echo $writers->id;?>">
                        <label class="form-check-label" for="inlineRadio1"><?php echo $writers->name  ?></label>
                        <?php
                                      }
                                  ?>
                      </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="ownerstore" class="btn btn-primary btn-sm">Submit</button>
                          <a href="<?php echo $baseUrl; ?>index.php?page=articles" class="btn btn-default btn-sm">Back</a>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    
