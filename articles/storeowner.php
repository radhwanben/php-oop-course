<?php

if(!defined('RESTRICTED'))exit('No direct script access allowed!');

// gather data
$id = (! empty($_POST['article'])) ? $_POST['article'] : '';
$writer_id = (! empty($_POST['owner'])) ? $_POST['owner'] : '';

/**
 * we check here if the form have submited or no
 * then we do simple foreach loop to gather the writer_id beceause it's array of id of wirters
 * then we call addowners method with @param ($id,$writer_id); 
 */

if(isset($_POST['ownerstore'])){

    foreach($writer_id as $value){
		$model->addowners($id,$value);
    }
    flash('article_flash', 'Owners has been stored', 'success');
    header('Location: '.$baseUrl.'index.php?page=articles');
}


	