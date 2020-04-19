<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
    $data = $model->getDataById(@$_GET['id']);

?>

        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                <h2>NAME OF WRITER: <?php echo $data->name; ?></h2>
                </div>
                <div class="panel-body">
                	<blockquote>
						<p>Address: <?php echo $data->address; ?> <br>created: <?php echo $data->created_at; ?> updated: <?php echo $data->updated_at; ?></p>
					</blockquote>
                	<p>
                	EMAIL OF WRITER:	<?php echo $data->email; ?>
                	</p>
                	<p>
                	BIOGRAPHY OF WRITER	<?php echo $data->biography; ?>
                	</p>
                	<div class="text-center">
                		<a href="<?php echo $baseUrl; ?>index.php?page=writers" class="btn btn-default btn-sm">Back</a>
                	</div>
                </div>
            </div>
        </div>
