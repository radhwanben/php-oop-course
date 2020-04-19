<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');
$model = new MagazineModel;
try {

	$id = $_GET['id'];

	$model->deleteMagazine($id);

	flash('magazine_flash', 'Magazine has been deleted', 'success');
	echo json_encode(['status' => true]);

} catch(Exception $e) {
	flash('magazine_flash', 'Error: '.$e->getMessage(), 'danger');
	echo json_decode(['status' => false]);
}
