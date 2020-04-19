<?php
if(!defined('RESTRICTED'))exit('No direct script access allowed!');

class ArticleModel
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
		$query = $this->db->prepare("SELECT * FROM articles");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_OBJ);
	}


    public function addArticle($title,$content,$magazine,$created_at,$updated_at)
    {
    	$query = $this->db->prepare('INSERT  INTO articles (title, content, magazine, created_at, updated_at) VALUES (:title, :content, :magazine, :created_at, :updated_at)');
		$query->execute(
    		[
				'title' => $title,
				'content' => $content,
				'magazine' => $magazine,
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
		$query = $this->db->prepare('SELECT * FROM articles WHERE id=:id');
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_OBJ);
	}

	/**
	* @param [$id,$title,$content,$magazine,$updated_at] 
	* @return 
	*/

    public function editArticle($id,$title,$content,$magazine,$updated_at)
    {
		$query = $this->db->prepare('UPDATE articles SET title=:title, content=:content, magazine=:magazine, updated_at=:updated_at WHERE id=:id');
		$query->execute([
			'title' => $title,
			'content' => $content,
			'magazine' => $magazine,
			'updated_at' => $updated_at,
			'id' => $id
		]);
		return $query->rowCount();
	}

	/**
	* @param [$id] 
	* @return 
	*/

    public function deleteArticle($id)
    {
    	$query = $this->db->prepare('DELETE FROM articles WHERE id=:id');
        $query->execute(['id' => $id]);
        return $query->rowCount();
	}
	
	/**
	 * @param [$id,$writer_id]
	 */

	public function addowners($id,$writer_id){
		$query = $this->db->prepare('INSERT  INTO owners (writer_id, article_id ) VALUES (:writer_id ,:article_id )');
		$query->execute([
			'writer_id' => $writer_id,
			'article_id' => $id
		]);
		return $query->rowCount();
	}

	/**
	 * @param ($id_article ,$id_writer)
	 */


	public function ownersdetails($id,$writer_id){
		$query=$this->db->prepare('SELECT name ,email FROM articles INNER JOIN owners ON articles.id=:article_id INNER JOIN writers ON owners.writer_id=:writer_id
		');
		$query->execute([
			'article_id' =>$id,
			'writer_id' =>$writer_id
		]);
		return $query->fetchAll(PDO::FETCH_OBJ);

	}



	}
	
	
