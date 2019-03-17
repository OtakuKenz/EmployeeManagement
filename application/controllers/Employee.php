<?php
    class Employee extends CI_Controller
    {
        public function index()
	    {
            $this->load->view('templates/header');
            $this->load->view('Employee/listEmployee');            
            $this->load->view('templates/footer');
        }
        public function RegisterEmployee()
        {
            $data['EmployeeFields'] = $this->load->view('Employee/EmployeeFields',NULL,TRUE);
            $this->load->view('templates/header');
            $this->load->view('Employee/RegisterEmployee',$data);            
            $this->load->view('templates/footer');
        }

        public function Register()
        {
            $this->Employee_Model->InsertNewEmployee();
        }

        public function EmployeeEdit()
        {
            $Name = $this->Employee_Model->GetEmployeeDetail()[0];
            $data['EmployeeFields'] = $this->load->view('Employee/EmployeeFields',$Name,TRUE);
            $data['ModalTitle'] = "Archieve Employee";
            $data['ModalBody'] = $this->load->view('Employee/DeleteEmployee/ModalBody',$Name,TRUE);
            $data['ModalFooter'] = $this->load->view('Employee/DeleteEmployee/ModalFooter',NULL,TRUE);
            $data['Modal'] = $this->load->view('Modal',$data,TRUE);
            $this->load->view('templates/header');
            $this->load->view('Employee/EditEmployee',$data);      
            $this->load->view('templates/footer');
        }

        public function EmployeeDataTable()
        {
            $object = $this->Employee_Model->GetEmployeeList();
            echo json_encode($object);
        }

        public function Edit()
        {
            $this->Employee_Model->EditEmployee();
        }

        public function Delete()
        {
            echo $this->Employee_Model->DeleteEmployee();
            redirect('/Employee');
        }
    }

?>