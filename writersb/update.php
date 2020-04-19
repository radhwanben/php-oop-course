<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$id = $_POST['id'];
$name= (! empty($_POST['name'])) ? $_POST['name'] : '';
$email= (! empty($_POST['email'])) ? $_POST['email'] : '';
$address = (! empty($_POST['address'])) ? $_POST['address'] : '';
$biography = (! empty($_POST['biography'])) ? $_POST['biography'] : '';
$updated_at = date('Y-m-d H:i:s');

// validate data
try {
	$model->editWriter($id,$name,$email,$address,$biography,$updated_at);
	flash('writer_flash', 'Writer has been updated', 'success');
	header('Location: '.$baseUrl.'index.php?page=writers');
} catch (Exception $e) {
	flash('writer_flash', 'Error: '.$e->getMessage(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=writers&action=create');
}
