<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$name1 = (! empty($_POST['name1'])) ? $_POST['name1'] : '';
$email1 = (! empty($_POST['email1'])) ? $_POST['email1'] : '';
$address1 = (! empty($_POST['address1'])) ? $_POST['address1'] : '';
$biography1 = (! empty($_POST['biography1'])) ? $_POST['biography1'] : '';

$name2 = (! empty($_POST['name2'])) ? $_POST['name2'] : '';
$email2 = (! empty($_POST['email2'])) ? $_POST['email2'] : '';
$address2 = (! empty($_POST['address2'])) ? $_POST['address2'] : '';
$biography2 = (! empty($_POST['biography2'])) ? $_POST['biography2'] : '';


$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
$database = new database;
$db = $database->connection();
try {
	$db->beginTransaction();

	// query 1

	$model->addWriter($name1,$email1,$address1,$biography1,$created_at,$updated_at);

	// throw new Exception("Error Processing Request");

	// query 2

	$model->addWriter($name2,$email2,$address2,$biography2,$created_at,$updated_at);

	$db->commit();
	flash('writer_flash', 'Writer has been stored', 'success');
	header('Location: '.$baseUrl.'index.php?page=writers');
} catch(Exception $e) {
	$db->rollback();
	flash('writer_flash', 'Error: '.$e->getMessage(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=writers&action=createMultiple');
}
