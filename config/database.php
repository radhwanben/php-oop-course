<?php
if(!defined('RESTRICTED'))exit('No direct script access allowed!');
/**
*
*/
class database
{

	static function connection()
	{
		try {
			$conn = new PDO('mysql:host=127.0.0.1;dbname=ongisschool_crud', 'root', '');
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			 $conn = null;
		}
			return $conn;
	}
}
