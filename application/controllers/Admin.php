<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('admin-login');
    }

    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->Admin_model->can_login($username, $password)) {
                $session_data = array('username' => $username);
                $this->session->set_userdata($session_data);
                $this->session->set_flashdata('success', 'Login successfully!');
                redirect(base_url() . 'Admin/dashboard'); 
            } else {
                $this->session->set_flashdata('failure', 'Invalid Username OR Password');
                redirect(base_url() . 'Admin/index'); 
            }
        } else {
            $this->session->set_flashdata('failure', 'Invalid Username OR Password');
            redirect(base_url() . 'Admin/index');
        }
    }
    
    public function logout()
     {
          $this->session->unset_userdata('username');
          redirect(base_url() . 'Admin/index');
     }

    public function dashboard()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/footer');
        $this->load->view('admin/dashboard');
        $this->load->view('credit'); 
    }

    public function manage_report()
	{
		$data['get'] = $this->Admin_model->allReports();
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/manage-report', $data);
		$this->load->view('credit');
    }
    
    public function viewReport($id)
	{
		$data['getReport'] = $this->Admin_model->viewReport($id);
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/view-report', $data);
		$this->load->view('credit');
    }
    
    public function manage_doctor()
	{
		$data['get'] = $this->Admin_model->getAll('doctor');
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/manage-doctor', $data);
		$this->load->view('credit');
    }
    
    public function addDoctor() {
		if($this->input->post()) {
			$formArray = array();
			$formArray['doctor_name'] = $this->input->post('doctor_name');
			$data = $this->db->insert('doctor', $formArray);
        	if ($data) {
				$this->session->set_flashdata('success', 'Doctor Added Successfully!');
            redirect(base_url("Admin/manage_doctor"));
        	} else {
				$this->session->set_flashdata('failure', 'Some Error Occured');
				redirect(base_url("Admin/manage_doctor"));
			}
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/footer');
            $this->load->view('admin/add-doctor');
		}
    } 
    
    public function manage_area()
	{
		$data['get'] = $this->Admin_model->getAll('visit_area');
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/manage-area', $data);
		$this->load->view('credit');
    }

    public function addArea() {
		if($this->input->post()) {
			$formArray = array();
			$formArray['area_of_visit'] = $this->input->post('area_of_visit');
			$data = $this->db->insert('visit_area', $formArray);
        	if ($data) {
				$this->session->set_flashdata('success', 'Area Added Successfully!');
            redirect(base_url("Admin/manage_area"));
        	} else {
				$this->session->set_flashdata('failure', 'Some Error Occured');
				redirect(base_url("Admin/manage_area"));
			}
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/footer');
            $this->load->view('admin/add-area');
		}
    } 

    public function manage_products()
	{
		$data['get'] = $this->Admin_model->getAll('product');
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/manage-product', $data);
		$this->load->view('credit');
    }

    public function addProducts() {
		if($this->input->post()) {
			$formArray = array();
			$formArray['product_details'] = $this->input->post('product_details');
			$data = $this->db->insert('product', $formArray);
        	if ($data) {
				$this->session->set_flashdata('success', 'Product Added Successfully!');
            redirect(base_url("Admin/manage_products"));
        	} else {
				$this->session->set_flashdata('failure', 'Some Error Occured');
				redirect(base_url("Admin/manage_products"));
			}
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/footer');
            $this->load->view('admin/add-product');
		}
    } 

    public function manage_promoItems()
	{
		$data['get'] = $this->Admin_model->getAll('promotional_items');
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/manage-promoItems', $data);
		$this->load->view('credit');
    }

    public function addPromoItems() {
		if($this->input->post()) {
			$formArray = array();
			$formArray['promo_items'] = $this->input->post('promo_items');
			$data = $this->db->insert('promotional_items', $formArray);
        	if ($data) {
				$this->session->set_flashdata('success', 'Area Added Successfully!');
            redirect(base_url("Admin/manage_promoItems"));
        	} else {
				$this->session->set_flashdata('failure', 'Some Error Occured');
				redirect(base_url("Admin/manage_promoItems"));
			}
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/footer');
            $this->load->view('admin/add-promoItems');
		}
    } 




}
