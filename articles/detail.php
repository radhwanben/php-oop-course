<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
    $data = $model->getDataById(@$_GET['id']);
    $writes = $modelwriters->getData();

   
    foreach ($writes as $write) {
        $owners =$model->ownersdetails(@$_GET['id'] , $write->id);
    }
?> 

        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                <h2><?php echo $data->title; ?></h2>
                </div>
                <div class="panel-body">
                NUMBER OF MAGAZINES <span class="badge badge-light"><?php  echo (count(array($data->magazine))); ?></span>

                	<blockquote>
                        <p>Magazine title : <?php
                        $x = $modelMagazin->getDataById($data->magazine) ;
                        echo $x->title; ?>
                        <p>Magazine publisher: <?php echo $x->publisher;?>
                        <p>content: <?php echo $x->content;?>
                        <br>
                         created: <?php echo $data->created_at; ?> updated: <?php echo $data->updated_at; ?></p>
					</blockquote>
                	<p>
                		<?php echo $data->content; ?>
                	</p>
                    
                    <?php
                    foreach ($owners as $owner) {?>
                    NAME OF AUTHORS <span class="badge badge-light"><?php  echo $owner->name; ?></span> <br>
                    EMAIL OF AUTHORS <span class="badge badge-light"><?php  echo $owner->email; ?></span>
                    <?php } ?>

                	<div class="text-center">
                		<a href="<?php echo $baseUrl; ?>index.php?page=articles" class="btn btn-default btn-sm">Back</a>
                	</div>
                </div>    
            </div>
        </div>
  