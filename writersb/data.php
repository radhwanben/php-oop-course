 <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Writers
                </div>
                <div class="panel-body">
                    <?php flash('writer_flash'); ?>
                    <a href="<?php echo $baseUrl; ?>index.php?page=writers&action=create" class="btn btn-sm btn-primary">Create</a>
                    <a href="<?php echo $baseUrl; ?>index.php?page=writers&action=createMultiple" class="btn btn-sm btn-success">Create Multiple</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Biography</th>
                                <th>Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $statement = $model->getData();
                            $no = 1;
                            foreach ($statement as $writer) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $writer->name; ?></td>
                                <td><?php echo (! empty($writer->email)) ? $writer->email : '-'; ?></td>
                                <td><?php echo (! empty($writer->address)) ? $writer->address : '-'; ?></td>
                                <td><?php echo (! empty($writer->biography)) ? $writer->biography : '-'; ?></td>
                                <td><?php echo $writer->created_at; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo $baseUrl; ?>index.php?page=writers&action=detail&id=<?php echo $writer->id; ?>" class="btn btn-sm btn-info">Detail</a>
                                    <a href="<?php echo $baseUrl; ?>index.php?page=writers&action=edit&id=<?php echo $writer->id; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <button value="<?php echo $baseUrl; ?>index.php?page=writers&action=delete&id=<?php echo $writer->id; ?>" class="btn btn-sm btn-danger delete" id="<?php echo $writer->id; ?>">Delete</button>
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
