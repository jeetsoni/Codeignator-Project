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
    			$this->session->set_flashdata('insert_post','Post added Successfully');
                $this->session->set_flashdata('msg_class','alert-success');                
    		}
    		else
    		{
    			
                $this->session->set_flashdata('insert_post','Post not added Please Try Again'

            );
                $this->session->set_flashdata('msg_class','alert-danger');
    		}
            return redirect('profile_con');
    	}
    	else
    	{
    		$this->load->view('add_post_view');
    	}
    }
}


 ?>