<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transaction extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        
    }

    public function show_transactions($user_id = 0, $offset = 0, $limit = 0) {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/transaction/index");
    }

    public function update_transaction($user_id = 0, $offset = 0, $limit = 0) {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/transaction/update_transaction");
    }

    public function delete_transaction($user_id = 0, $offset = 0, $limit = 0) {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/transaction/delete_transaction");
    }
}
