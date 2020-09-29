<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('login');
	}


	function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$userId = $this->input->post('user_id');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->User_model->can_login($userId, $username, $password)) {
				$session_data = array('user_id' => $userId, 'username' => $username);
				$this->session->set_userdata($session_data);
				$this->session->set_flashdata('success', 'Login successfully!');
				redirect(base_url() . 'User/dashboard');  
			} else {
				$this->session->set_flashdata('failure', 'Invalid Username OR Password');
				redirect(base_url() . 'User/index');  
			}
		} else {
			$this->session->set_flashdata('failure', 'Invalid Username OR Password');
			redirect(base_url() . 'User/index');
		}
	}
	
	 // IsNotLogin
	function IsNotLogin()
	{
		$Admin_Login = $this->session->get_userdata('user_name');
		if(empty($Admin_Login['user_id']))
		{	
			$this->session->set_flashdata('message','Login firstly !!');
			redirect(base_url() . 'User/index');
		}
     }
    
    public function logout()
     {
          $this->session->unset_userdata('user_id');
          redirect(base_url() . 'User/index');
     }
     
	public function dashboard()
	{
		$this->load->view('user/header');
		$this->load->view('user/footer');
		$this->load->view('user/dashboard');
		$this->load->view('credit');
		
	}

	public function my_report()
	{
		$data['get'] = $this->User_model->allReports();
		$this->load->view('user/header');
		$this->load->view('user/footer');
		$this->load->view('user/my-report', $data);
		$this->load->view('credit');
	}

	public function addReport() {
		 
		 
		
		if($this->input->post())
		{
			$formArray = array();
			
			
					
			$formArray['user_id'] = $this->session->userdata('user_id');
			$formArray['doctor_name'] = $this->input->post('doctor_name');
			$formArray['area_of_visit'] = $this->input->post('area_of_visit');
			$formArray['product_details'] = $this->input->post('product_details');
			$formArray['promo_items'] = $this->input->post('promo_items');
			$formArray['remarks'] = $this->input->post('remarks');
			$formArray['visit_date'] = $this->input->post('visit_date');

			date_default_timezone_set('Asia/Kolkata');
			$formArray['created_at'] = date('Y-m-d H:i');

			
			

			$data = $this->db->insert('user_report', $formArray);
        	if ($data) {
				$this->session->set_flashdata('success', 'Membership Cancel Request Applied Successfully!');
            redirect(base_url("User/my_report"));
        	} else {
				$this->session->set_flashdata('failure', 'Some Error Occured');
				redirect(base_url("User/my_report"));
			}
			
		}

		else
		{
			$data['getDoctor'] = $this->User_model->getAll('doctor');
			$data['getArea'] = $this->User_model->getAll('visit_area');
			$data['getProduct'] = $this->User_model->getAll('product');
			$data['getPromo'] = $this->User_model->getAll('promotional_items');
			$this->load->view('user/header');
			$this->load->view('user/footer');
            $this->load->view('user/add-report', $data);
            
		}
	} 

	
	
}
