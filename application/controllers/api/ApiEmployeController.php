
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/RestController.php');
require (APPPATH.'/libraries/Format.php');

use chriskacerguis\RestServer\RestController;

class ApiEmployeController extends RestController{
    //call created model
    public function __construct(){
        parent::__construct();
        $this->load->model('EmployeeModel');
    }

    public function index_get(){
        $obj=new EmployeeModel();
        $result_emp=$obj->get_employee();
        $this->response($result_emp,200);
    }
}
?> 
