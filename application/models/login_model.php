<?php 
	
	/**
	 * 
	 */
	class Login_model extends CI_Model
	{
		
		function can_login($email,$password)
		{
			$this->db->where('email',$email);
			$query = $this->db->get('codeigniter_register');
			if($query->num_rows() > 0)
			{
				foreach ($query->result() as $row) 
				{
					if($row->is_email_verified == 'yes')
					{
						$store_password = $this->encrypt->decode($row->password);
						if($password == $store_password)
						{
							$data['id'] = $this->session->set_userdata('id',$row->id);
							$data['username'] = $this->session->set_userdata('uname',$row->name);
							return $data;

						}
						else
						{
							return 'Wrong Password';
						}
					}
					else
					{
						return 'First Verified Your Email Address';

					}
				}
			}
			else
			{
				return 'Wrong Email Address';
			}
		}
		
	}



 ?>