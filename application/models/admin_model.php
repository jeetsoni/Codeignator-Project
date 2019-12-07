<?php 
/**
 * 
 */
class Admin_model extends CI_Model
{
	public function __construct() {
        parent::__construct();
    }

	public function articlelist()
		{
			$id = $this->session->userdata('id');
			$q = $this->db->select()
					 ->from('articles')
					 ->where(['user_id' => $id])	
					 ->get();
					 return $q->result();

		}	
	public function addpost($array)
	{
			return $this->db->insert('articles',$array);
	}
	public function delpost($id)
	{

		return $this->db->delete('articles',['id'=>$id]);
	}
	public function find_article($articleid)
	{
		$q = $this->db->select(['article_title','article_body','id'])
				->where('id',$articleid)
				->get('articles');
				return $q->row();
	}
	public function update_post($articleid,$article)
	{
		print_r($article);
		
		return $this->db->where('id',$articleid)
						->update('articles',$article);
	}
	public function all_post()
	{
		$q = $this->db->select()
					->from('articles')
					->order_by('article_title asc','image_path asc')
					->get();
					return $q->result();
	}
}

 ?>	