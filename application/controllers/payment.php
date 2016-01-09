<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model("org/payment_model");
    }

    public function index() {
        
    }

    public function show_payments() {
        $payment_list = array();
        $resulted_payment_list = $this->payment_model->get_all_payments();
        if (!empty($resulted_payment_list)) {
            if (property_exists($resulted_payment_list, "result")) {
                $payment_list = $resulted_payment_list->result;
            }
        }
        $this->data['payment_list'] = $payment_list;
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/payment/index", $this->data);
    }

    public function create_payment() {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/payment/create_payment");
    }

    public function update_payment() {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/payment/update_payment");
    }

    public function delete_payment() {
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/payment/delete_payment");
    }

}
