<?php
    class Employee_Model extends CI_Model
    {
        public function __construct()
        {
                //$this->load->database();
        }
        
        public function GetEmployeeList()
        {
            $query = $this->db->get('Employee');
            //$query = ("select * from Employee");
            return $query->result();
        }
    }
?>