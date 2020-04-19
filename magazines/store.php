<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$title = (! empty($_POST['title'])) ? $_POST['title'] : '';
$content = (! empty($_POST['content'])) ? $_POST['content'] : '';
$publisher = (! empty($_POST['publisher'])) ? $_POST['publisher'] : '';
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
$data = [
	'title' => $title,
	'content' => $content,
	'publisher' => $publisher,
	'created_at' => $created_at,
	'updated_at' => $updated_at
];
// validate data
$validator = new MagazineStoreValidation($data);
$validator->validate();
if ($validator->passes()) {
	// persist data
	try {

		$model->addMagazine($title,$content,$publisher,$created_at,$updated_at);

		flash('magazine_flash', 'Magazine has been stored', 'success');
		header('Location: '.$baseUrl.'index.php?page=magazines');
		exit;
	} catch(Exception $e) {
		flash('magazine_flash', 'Error: '.$e->getMessage(), 'danger');
		header('Location: '.$baseUrl.'index.php?page=magazines&action=create');
	}
}else{
	flash('magazine_flash', $validator->getErrors(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=magazines&action=create');
}
