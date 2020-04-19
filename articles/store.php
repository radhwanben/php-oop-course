<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$title = (! empty($_POST['title'])) ? $_POST['title'] : '';
$content = (! empty($_POST['content'])) ? $_POST['content'] : '';
$magazine = (! empty($_POST['magazine'])) ? $_POST['magazine'] : '';
$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');
$data = [
	'title' => $title,
	'content' => $content,
	'created_at' => $created_at,
	'updated_at' => $updated_at
];
// validate data
$validator = new ArticleStoreValidation($data);
$validator->validate();
if ($validator->passes()) {
	// persist data
	try {

		$model->addArticle($title,$content,$magazine,$created_at,$updated_at);
		
		flash('article_flash', 'Article has been stored', 'success');
		header('Location: '.$baseUrl.'index.php?page=articles');

		exit;
	} catch(Exception $e) {
		flash('article_flash', 'Error: '.$e->getMessage(), 'danger');
		header('Location: '.$baseUrl.'index.php?page=articles&action=create');
	}
}else{
	flash('article_flash', $validator->getErrors(), 'danger');
	header('Location: '.$baseUrl.'index.php?page=articles&action=create');
}
