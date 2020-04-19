<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$name = (! empty($_POST['name'])) ? $_POST['name'] : '';
$email = (! empty($_POST['email'])) ? $_POST['email'] : '';
$address = (! empty($_POST['address'])) ? $_POST['address'] : '';
$biography = (! empty($_POST['biography'])) ? $_POST['biography'] : '';
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
$data = [
	'name' => $name,
	'email' => $email,
	'address' => $address,
	'biography' => $biography,
	'created_at' => $created_at,
	'updated_at' => $updated_at
];
// validate data
$validator = new WriterStoreValidation($data);
$validator->validate();
if ($validator->passes()) {
	// persist data
	try {

		$model->addWriter($name,$email,$address,$biography,$created_at,$updated_at);

		flash('writer_flash', 'Writer has been stored', 'success');
		header('Location: '.$baseUrl.'index.php?page=writers');
		exit;
	} catch(Exception $e) {
		flash('writer_flash', 'Error: '.$e->getMessage(), 'danger');
		header('Location: '.$baseUrl.'index.php?page=writers&action=create');
	}
}else{
	flash('writer_flash', $validator->getErrors(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=writers&action=create');
}
