<?php 
/**
 * 
 */
class Admin_model extends CI_Model
{

	public function articlelist()
		{
			$id = $this->session->userdata('id');
			$q = $this->db->select('article_title')
					 ->from('articles')
					 ->where(['user_id' => $id])	
					 ->get();
					 return $q->result();

		}	
	public function addpost($array)
	{
			return $this->db->insert('articles',$array);
	}
}

 ?>	