<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$title1 = (! empty($_POST['title1'])) ? $_POST['title1'] : '';
$content1 = (! empty($_POST['content1'])) ? $_POST['content1'] : '';
$publisher1 = (! empty($_POST['publisher1'])) ? $_POST['publisher1'] : '';

$title2 = (! empty($_POST['title2'])) ? $_POST['title2'] : '';
$content2 = (! empty($_POST['content2'])) ? $_POST['content2'] : '';
$publisher2 = (! empty($_POST['publisher2'])) ? $_POST['publisher2'] : '';

$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
$database = new database;
$db = $database->connection();
try {
	$db->beginTransaction();

	// query 1

	$model->addMagazine($title1,$content1,$publisher1,$created_at,$updated_at);

	// throw new Exception("Error Processing Request");

	// query 2

	$model->addMagazine($title2,$content2,$publisher2,$created_at,$updated_at);

	$db->commit();
	flash('magazine_flash', 'Magazine has been stored', 'success');
	header('Location: '.$baseUrl.'index.php?page=magazines');
} catch(Exception $e) {
	$db->rollback();
	flash('magazine_flash', 'Error: '.$e->getMessage(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=magazines&action=createMultiple');
}
