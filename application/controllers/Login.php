<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('Login_model');
	}
	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
        if($logged_in){
            //if yes redirect to welcome page
            redirect(base_url().'admin/dashboard');
			//echo "Redirect Login";
        }
		$this->load->view('login');
	}
	public function auth()
	{
		$email= $this->input->post('email');
		$password = sha1($this->input->post('password'));
        $check_login = $this->Login_model->checkLogin($email, $password);
		/* print_r($check_login);
		die; */
		$sessiondata=[
			'name' => $check_login[0]->name,
			'user_type' => $check_login[0]->user_type,
			'logged_in' => true,
		];
		
		if ($check_login) {
            //if yes then set the session 'loggin_in' as true
            $this->session->set_userdata($sessiondata);
			$this->session->set_flashdata('msg', 'You are Login Successfully!');
            redirect(base_url().'admin/dashboard');
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in', false);
            
            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url().'login');            
        }
	}
	
	 public function logout() {
        //unset the logged_in session and redirect to login page
        $this->session->unset_userdata('logged_in');
        redirect(base_url().'login');
    }


	
}
?>
