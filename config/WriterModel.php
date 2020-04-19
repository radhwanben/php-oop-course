<?php
if(!defined('RESTRICTED'))exit('No direct script access allowed!');

class WriterModel
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
		$query = $this->db->prepare("SELECT * FROM writers");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_OBJ);
	}


    public function addWriter($name,$email,$address,$biography,$created_at,$updated_at)
    {
    	$query = $this->db->prepare('INSERT INTO writers (name, email, address, biography, created_at, updated_at) VALUES (:name, :email, :address, :biography, :created_at, :updated_at)');
    	$query->execute(
    		[
				'name' => $name,
				'email' => $email,
				'address' => $address,
				'biography' => $biography,
				'created_at' => $created_at,
				'updated_at' => $updated_at
			]
    	);
    	return $query->rowCount();

    }

		public function editWriter($name,$email,$address,$biography,$updated_at)
    {
			$query = $this->db->prepare('UPDATE writers SET name=:name, email=:email, address=:address, biography=:biography, updated_at=:updated_at WHERE id=:id');
    	$query->execute(
    		[
				'name' => $name,
				'email' => $email,
				'address' => $address,
				'biography' => $biography,
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
		$query = $this->db->prepare('SELECT * FROM writers WHERE id=:id');
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_OBJ);
	}

	/**
	* @param [$id,$title,$content,$author,$updated_at]
	* @return
	*/



	/**
	* @param [$id]
	* @return
	*/

    public function deleteWriter($id)
    {
    	$query = $this->db->prepare('DELETE FROM writers WHERE id=:id');
        $query->execute(['id' => $id]);
        return $query->rowCount();
	}
	


}

