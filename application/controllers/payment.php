<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {
        
    }
    
    public function show_payments()
    {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/payment/index");
    }
    
    public function create_payment()
    {
        
    }
    
    public function update_payment()
    {
        
    }
}