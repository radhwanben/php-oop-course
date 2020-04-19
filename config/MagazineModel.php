<?php
if(!defined('RESTRICTED'))exit('No direct script access allowed!');

class MagazineModel
{
	private $db;
	/**
	* @param [type] $data [description]
	*/

    public function __construct()
	{
		$this->db = database::connection();
	}

	/**
	* @param [type] $data [description]
	* @return
	*/

    public function getData(){
		$query = $this->db->prepare("SELECT * FROM magazines");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_OBJ);
	}


    public function addMagazine($title,$content,$publisher,$created_at,$updated_at)
    {
    	$query = $this->db->prepare('INSERT INTO magazines (title, content, publisher, created_at, updated_at) VALUES (:title, :content, :publisher, :created_at, :updated_at)');
    	$query->execute(
    		[
				'title' => $title,
				'content' => $content,
				'publisher' => $publisher,
				'created_at' => $created_at,
				'updated_at' => $updated_at
			]
    	);
    	return $query->rowCount();

    }

	/**
	* @param [$id]
	*/

    public function getDataById($id)
    {
		$query = $this->db->prepare('SELECT * FROM magazines WHERE id=:id');
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_OBJ);
	}

	/**
	* @param [$id,$title,$content,$publisher,$updated_at]
	* @return
	*/

    public function editMagazine($id,$title,$content,$publisher,$updated_at)
    {
		$query = $this->db->prepare('UPDATE magazines SET title=:title, content=:content, publisher=:publisher, updated_at=:updated_at WHERE id=:id');
		$query->execute([
			'title' => $title,
			'content' => $content,
			'publisher' => $publisher,
			'updated_at' => $updated_at,
			'id' => $id
		]);
		return $query->rowCount();
	}

	/**
	* @param [$id]
	* @return
	*/

    public function deleteMagazine($id)
    {
    	$query = $this->db->prepare('DELETE FROM magazines WHERE id=:id');
        $query->execute(['id' => $id]);
        return $query->rowCount();
    }
}
