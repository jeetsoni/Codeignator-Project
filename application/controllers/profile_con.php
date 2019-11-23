<?php 
class Profile_con extends CI_Controller
{
	
	

	public function index()
        {
                $this->load->model('admin_model');
                $artlicles = $this->admin_model->articlelist();
                $this->load->view('profile_view',['artlicles'=>$artlicles]);
        }
    public function addpost()
    {
    	$this->load->view('add_post_view');
    }
    public function add_validation()
    {
    	if($this->form_validation->run('add_post_rules'))
    	{
    		$post = $this->input->post();
    		$this->load->model('admin_model');
    		if($this->admin_model->addpost($post))
    		{
    			echo "insert";
    		}
    		else
    		{
    			echo "failes";
    		}
    	}
    	else
    	{
    		$this->load->view('add_post_view');
    	}
    }
}


 ?>