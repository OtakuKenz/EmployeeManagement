<?php
    class Employee_Model extends CI_Model
    {
        public function __construct()
        {
                //$this->load->database();
        }
        
        public function GetEmployeeList()
        {
            $this->db->where('isArchive',0);
            $query = $this->db->get('Employee');
            return $query->result();
        }

        public function GetEmployeeDetail()
        {
            $Id = $this->input->post('Id');
            $query = $this->db->where('Id',$Id)->get('Employee');
            return $query->result();
        }

        public function InsertNewEmployee()
        {
            $data = array(
                'FirstName' =>$this->input->post('firstname'),
                'MiddleName' =>$this->input->post('middlename'),
                'LastName' => $this->input->post('lastname'),
                'Birthdate' => $this->input->post('birthdate'),
                'HireDate' => $this->input->post('hiredate')
            );
            $this->db->insert('Employee',$data);
        }

        public function DeleteEmployee()
        {
            $Id= $this->input->post('Id');
            $data = array('isArchive' => 1);
            $this->db->where('id', $Id);
            $this->db->update('Employee',$data);
        }

        public function EditEmployee()
        {
            $Id= $this->input->post('Id');
            $data = array(
                'FirstName' =>$this->input->post('firstname'),
                'MiddleName' =>$this->input->post('middlename'),
                'LastName' => $this->input->post('lastname'),
                'Birthdate' => $this->input->post('birthdate'),
                'HireDate' => $this->input->post('hiredate')
            );
            $this->db->where('Id',$Id);
            $this->db->update('Employee',$data);
        }
    }
?>