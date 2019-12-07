<?php 
class Profile_con extends CI_Controller
{
    function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('id'))
            {
                redirect('login_con');
            }

        }
	
	

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
        $config=[
            'upload_path'=>'./upload/',
            'allowed_types' => 'gif|jpg|png|jpeg',
        ];

        $this->load->library('upload',$config);
    	if($this->form_validation->run('add_post_rules') && $this->upload->do_upload())
    	{
            $post = $this->input->post();
            $data = $this->upload->data();
            $image_path = base_url("upload/".$data['raw_name'].$data['file_ext']);
            $post['image_path'] = $image_path;
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
            $upload_error=$this->upload->display_errors();
    		$this->load->view('add_post_view',compact('upload_error'));
    	   
        }
    }

    public function delpost(){
        $id = $this->input->post('id');
        $this->load->model('admin_model');
            if($this->admin_model->delpost($id))
            {
                $this->session->set_flashdata('insert_post','Post deleted Successfully');
                $this->session->set_flashdata('msg_class','alert-success');                
            }
            else
            {
                
                $this->session->set_flashdata('insert_post','Try Again not Delete'

            );
                $this->session->set_flashdata('msg_class','alert-danger');
            }
            return redirect('profile_con');


    }
    public function editpost($id)
    {
        $this->load->model('admin_model'); 
        $article = $this->admin_model->find_article($id);
        $this->load->view('edit_article_view',['article'=>$article]);
        
    }
    public function update_article()
    {
        
        if($this->form_validation->run('add_post_rules'))
    	{
            $post = $this->input->post();
            $articleid=$post['id'];
            
    		$this->load->model('admin_model');
    		if($this->admin_model->update_post($articleid,$post))
    		{
                
    			$this->session->set_flashdata('insert_post','Post edited Successfully');
                $this->session->set_flashdata('msg_class','alert-success');                
    		}
    		else
    		{
    			
                $this->session->set_flashdata('insert_post','Post not edited Please Try Again'

            );
                $this->session->set_flashdata('msg_class','alert-danger');
    		}
            return redirect('profile_con');
    	}
    	else
    	{
    		$this->load->view('edit_article_view');
    	   
        }
    }

    

    
}


 ?>