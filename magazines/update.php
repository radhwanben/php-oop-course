<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$id = $_POST['id'];
$title = (! empty($_POST['title'])) ? $_POST['title'] : '';
$content = (! empty($_POST['content'])) ? $_POST['content'] : '';
$publisher = (! empty($_POST['publisher'])) ? $_POST['publisher'] : '';
$updated_at = date('Y-m-d H:i:s');

// validate data
try {
	$model->editMagazine($id,$title,$content,$publisher,$updated_at);
	flash('magazine_flash', 'Magazine has been updated', 'success');
	header('Location: '.$baseUrl.'index.php?page=magazines');
} catch (Exception $e) {
	flash('magazine_flash', 'Error: '.$e->getMessage(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=magazines&action=create');
}
