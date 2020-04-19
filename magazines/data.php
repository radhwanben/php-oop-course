 <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Magazines
                </div>
                <div class="panel-body">
                    <?php flash('magazine_flash'); ?>
                    <a href="<?php echo $baseUrl; ?>index.php?page=magazines&action=create" class="btn btn-sm btn-primary">Create</a>
                    <a href="<?php echo $baseUrl; ?>index.php?page=magazines&action=createMultiple" class="btn btn-sm btn-success">Create Multiple</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Publisher</th>
                                <th>Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $statement = $model->getData();
                            $no = 1;
                            foreach ($statement as $magazine) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $magazine->title; ?></td>
                                <td><?php echo (! empty($magazine->publisher)) ? $magazine->publisher : '-'; ?></td>
                                <td><?php echo $magazine->created_at; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo $baseUrl; ?>index.php?page=magazines&action=detail&id=<?php echo $magazine->id; ?>" class="btn btn-sm btn-info">Detail</a>
                                    <a href="<?php echo $baseUrl; ?>index.php?page=magazines&action=edit&id=<?php echo $magazine->id; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <button value="<?php echo $baseUrl; ?>index.php?page=magazines&action=delete&id=<?php echo $magazine->id; ?>" class="btn btn-sm btn-danger delete" id="<?php echo $magazine->id; ?>">Delete</button>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
