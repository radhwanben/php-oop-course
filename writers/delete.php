<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');
$model = new WriterModel;
try {

	$id = $_GET['id'];

	$model->deleteWriter($id);

	flash('writer_flash', 'Writer has been deleted', 'success');
	echo json_encode(['status' => true]);

} catch(Exception $e) {
	flash('writer_flash', 'Error: '.$e->getMessage(), 'danger');
	echo json_decode(['status' => false]);
}
