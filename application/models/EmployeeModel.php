<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeModel extends CI_Model{
    public function get_employee(){
        $query= $this->db->get('employe');
        return $query->result();
    }
}