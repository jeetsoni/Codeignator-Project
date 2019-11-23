<?php 

	/**
	 * 
	 */
	class Private_area extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('id'))
			{
				redirect('login_con');
			}

		}
		function index()
		{
			$this->load->view('private_area_view');	
		}
		function logout()
		{
			$data = $this->session->all_userdata();
			foreach($data as $row => $row_value)
			{
				 $this->session->unset_userdata($row);
			}
			redirect('login_con');
		}
		
	}

	

 ?>