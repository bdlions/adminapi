<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Transaction extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model("org/transaction_model");
    }

    public function index() {
        
    }

    public function show_transactions($user_id = 0, $offset = 0, $limit = 0) {
        $offset = 0;
        $limit = 0;
        $transction_list = array();
        $resulted_transction_list = $this->transaction_model->get_all_transactions($user_id, $offset, $limit);
        if (!empty($resulted_transction_list)) {
            if (property_exists($resulted_transction_list, "result")) {
                $transction_list = $resulted_transction_list->result;
            }
        }
        $this->data['transction_list'] = $transction_list;
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/transaction/index", $this->data);
    }

    public function update_transaction($transction_id = 0) {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('api_key', 'Api key', 'xss_clean|required');
        $this->form_validation->set_rules('balance_in', 'Balance In', 'xss_clean|required');
        $this->form_validation->set_rules('balance_out', 'Balance Out', 'xss_clean|required');
        $this->form_validation->set_rules('status_id', 'Transaction Status Id', 'xss_clean|required');
        $this->form_validation->set_rules('type_id', 'Transaction type Id', 'xss_clean|required');
        $this->form_validation->set_rules('cell_no', 'Cell Number', 'xss_clean|required');
        $this->form_validation->set_rules('description', 'description', 'xss_clean|required');
        if ($this->input->post('submit_update_transction')) {
            if ($this->form_validation->run() == true) {
                $transction_info = new stdClass();
                $transction_info->transactionId = $transction_id;
                $transction_info->apikey = $this->input->post('api_key');
                $transction_info->balanceIn = $this->input->post('balance_in');
                $transction_info->balanceOut = $this->input->post('balance_out');
                $transction_info->transactionStatusId = $this->input->post('status_id');
                $transction_info->transactionTypeId = $this->input->post('type_id');
                $transction_info->cellNumber = $this->input->post('cell_no');
                $transction_info->description = $this->input->post('description');
                $transction_info->createdOn = $this->input->post('created_on');
                $transction_info->modifiedOn = $this->input->post('modified_on');
                $result_event = $this->transaction_model->update_transction_info($transction_info);
                if (property_exists($result_event, "responseCode") != FALSE) {
                    $response_code = $result_event->responseCode;
                    if ($response_code == RESPONSE_CODE_SUCCESS) {
                        $this->data['message'] = "Transction is updated successfully.";
                    } else {
                        $this->data['message'] = 'Error while updating a service.';
                    }
                }
            } else {
                $this->data['message'] = validation_errors();
            }
        }
        $transction_info = $this->transaction_model->get_transction_info($transction_id);
        if (property_exists($transction_info, "result")) {
            $transction_info = $transction_info->result;
        }
        $this->data['transction_info'] = $transction_info;
        $this->data['api_key'] = array(
            'name' => 'api_key',
            'id' => 'api_key',
            'type' => 'text',
            'value' => $transction_info->apikey
        );
        $this->data['balance_in'] = array(
            'name' => 'balance_in',
            'id' => 'balance_in',
            'type' => 'text',
            'value' => $transction_info->balanceIn
        );
        $this->data['balance_out'] = array(
            'name' => 'balance_out',
            'id' => 'balance_out',
            'type' => 'text',
            'value' => $transction_info->balanceOut
        );
        $this->data['status_id'] = array(
            'name' => 'status_id',
            'id' => 'status_id',
            'type' => 'text',
            'value' => $transction_info->transactionStatusId
        );
        $this->data['type_id'] = array(
            'name' => 'type_id',
            'id' => 'type_id',
            'type' => 'text',
            'value' => $transction_info->transactionTypeId
        );
        $this->data['cell_no'] = array(
            'name' => 'cell_no',
            'id' => 'cell_no',
            'type' => 'text',
            'value' => $transction_info->cellNumber
        );
        $this->data['description'] = array(
            'name' => 'description',
            'id' => 'description',
            'type' => 'text',
            'value' => $transction_info->description
        );
        $this->data['created_on'] = array(
            'name' => 'created_on',
            'id' => 'created_on',
            'type' => 'text',
            'value' => $transction_info->createdOn
        );
        $this->data['modified_on'] = array(
            'name' => 'modified_on',
            'id' => 'modified_on',
            'type' => 'text',
            'value' => $transction_info->modifiedOn
        );
        $this->data['submit_update_transction'] = array(
            'id' => 'submit_update_transction',
            'name' => 'submit_update_transction',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/transaction/update_transaction", $this->data);
    }

    public function delete_transaction() {
        $response = array();
        $transction_id = $this->input->post('transction_id');
        $result = $this->transaction_model->delete_transaction($transction_id);
        if ($result != false) {
            $response['status'] = 1;
        } else {
            $response['status'] = 0;
        }
        echo json_encode($response);
    }

//    public function delete_transaction($transction_id = 0) {
//
//        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/transaction/delete_transaction");
//    }

}
