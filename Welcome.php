<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library(array('session'));
		$this->load->model('User_model');
	}
	public function home()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		//set validation rules
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		if($this->form_validation->run() === false){
			$this->load->view('home');
		}else{
			$name = $this->input->post('name');
			$password = $this->input->post('password');

			if ($this->User_model->insert($name,$password)){
				$this->session->set_flashdata('success', 'Bayr hvrgey.');
			}else{
				$this->session->set_flashdata('failed', 'Damn error.');
			}

			redirect('/');
        }
	}
}
