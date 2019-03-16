<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('table');
		$this->load->view('templates/header');
		$this->load->view('Employee/listEmployee.php');
		$this->load->view('templates/footer');
	}
	public function Register()
        {
			echo "test";
			/*
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('fname', 'Fname', 'required');
            $this->form_validation->set_rules('mname', 'Mname', 'required');
            $this->form_validation->set_rules('lname', 'Lname', 'required');
            
            $this->load->view('templates/header');
            if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('Employee/register',$data);
                }
                else
                {
                    //$this->load->view('formsuccess');
                    $this->load->view('Employee/register',$data);
                }

                
                
			$this->load->view('templates/footer');
			*/
        }
}
