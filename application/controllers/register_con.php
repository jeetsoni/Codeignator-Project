<?php
class Register_con extends CI_Controller {

        public function __construct()
        {
        	parent::__construct();
        	$this->load->library('form_validation');
        	$this->load->library('encrypt');
        	$this->load->model('register_model');

        }

        function index()
        {
        	$this->load->view('register_view'); 	
        }
        function validation()
        {
        	$this->form_validation->set_rules('user_name','name','required|trim');
        	$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email|is_unique[codeigniter_register.email]');
        	$this->form_validation->set_rules('user_password','Password','required');

        	if($this->form_validation->run())
        	{
        		$verification_key = md5(rand());
        		$encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
        		 $data = array(
						'name'  => $this->input->post('user_name'),
						'email'  => $this->input->post('user_email'),
						'password' => $encrypted_password,
						'verification_key' => $verification_key
						);
						$id = $this->register_model->insert($data);
        		
        			$subject = "Please verify email for login";
        			$message = "<p>Hi ".$this->input->post('user_name')."</p>
        			<p><a href ='".base_url()."register_con/verify_email/".$verification_key."'>link</a>.</p>
                    ";
        			// $config = array(
        			// 	'protocol'  =>  'smtp',
        			// 	'smtp_host' =>  'ssl://smtp.gmail.com',
        			// 	'smtp_port' =>  '465',
        			// 	'smtp_user' =>  'sonijeet1837@gmail.com',
        			// 	'smtp_pass' =>  'Mynameisjeet',
        			// 	'mailtype'  =>  'html',
        			// 	'charset'   =>  'utf-8',
        			// 	'wordwrap'  =>  'TRUE'
        			// );
        			// $this->load->library('email',$config);
        			// $this->email->set_newline("\r\n");
        			// $this->email->from('sonijeet1837@gmail.com');
        			// $this->email->to($this->input->post('user_email'));
        			// $this->email->subject($subject);
        			// $this->email->message($message);

        			$this->load->library('email');

$config['protocol']    = 'smtp';
$config['smtp_host']    = 'ssl://smtp.gmail.com';
$config['smtp_port']    = 465;
$config['smtp_user']    = 'testing1837@gmail.com';
$config['smtp_pass']    = 'test@1837';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
      

$this->email->initialize($config);
$this->email->set_mailtype('html');
$this->email->from('testing1837@gmail.com', 'Jeet Soni');
$this->email->to($this->input->post('user_email')); 
$this->email->subject($subject);
$this->email->message($message); 



        			if($this->email->send())
        			{
        				echo "success";
        				$this->session->set_flashdata('message','Check in your email for email verification mail');
        				redirect('register_con');
        			}
                    else{
                    echo "error";
                       
                    }

        		

        	}
        	else{
        		$this->index();
        	}
        }

        function verify_email()
        {
            if($this->uri->segment(3))
            {
                $verification_key = $this->uri->segment(3);
                if($this->register_model->verify_email($verification_key))
                {
                    $data['message'] ='<h1 align="center">Your Email Has Been Successfully Verified, now you can login from <a href="'.base_url().'login_con">Here</a></h1>';
                }
                else
                {
                    $data['message'] = '<h1 align="center">Invelid Link</h1>';  
                }
                $this->load->view('email_verification',$data);
            }
        }
}