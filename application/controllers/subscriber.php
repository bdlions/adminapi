<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscriber extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index()
    {
        
    }
    
    public function show_subscribers()
    {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/subscriber/index");
    }
    
    public function create_subscriber()
    {
          $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/subscriber/create_subscriber");
    }
    
    public function update_subscriber()
    {
      $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/subscriber/update_subscriber");
    }
}