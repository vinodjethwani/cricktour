<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
class Register extends CI_Controller {
	
	 public function __construct() {
        parent::__construct();
        
        //load the required helpers and libraries
        $this->load->library('form_validation');        
        //load our Register model here
        $this->load->model('Register_model');
    }
	public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
         if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'admin/dashboard');
			//echo "test register";
        } 
        //load the register page views
        $this->load->view('register');
    }
	 public function doRegister() {
        //set the form validation here
         $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]'); 
		$this->form_validation->set_rules('mobile_number', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
		
		  if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'register');
        } else {

            //if not get the input values
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
			$number = $this->input->post('mobile_number');
            $dob = $this->input->post('date_of_birth');

			$data = [
			'name' => $name, 
			'email' => $email, 
			'password' => $password, 
			'mobile_number' => $number,
			'date_of_birth' => $dob,
			'created_at' => date('Y-m-d H:i:s')
            ];
			 $insert_data = $this->Register_model->add_user($data);
			 
			 if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect(base_url() . 'login');
            }
		} 
	 }
}
?>