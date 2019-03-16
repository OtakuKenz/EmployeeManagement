<?php
    class Employee extends CI_Controller
    {
        public function index()
	    {
            $this->load->library('table');

            /*$data = array(
                array('Fred', 'Blue', 'Small'),
                array('Mary', 'Red', 'Large'),
                array('John', 'Green', 'Medium')
            );
            $this->table->set_heading("Name","Color","Size");*/
            $data['table'] = $this->Employee_Model->GetEmployeeList();

            $this->load->view('templates/header');
            $this->load->view('Employee/listEmployee.php',$data);
            $this->load->view('templates/footer');
	    }
        public function Register()
        {
            echo "register";
            die;
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('fname', 'Fname', 'required');
            $this->form_validation->set_rules('mname', 'Mname', 'required');
            $this->form_validation->set_rules('lname', 'Lname', 'required');
            
            $this->load->view('templates/header');
            if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('register',$data);
                }
                else
                {
                    //$this->load->view('formsuccess');
                    $this->load->view('register',$data);
                }

                
                
                $this->load->view('templates/footer');
        }
    }

?>