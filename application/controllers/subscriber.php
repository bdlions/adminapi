<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscriber extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model("org/subscriber_model");
    }

    public function index() {
        
    }

    public function show_subscribers() {
        $subscriber_list = array();
        $resulted_subscriber_list = $this->subscriber_model->get_all_subscribers();
        if (!empty($resulted_subscriber_list)) {
            if (property_exists($resulted_subscriber_list, "result")) {
                $subscriber_list = $resulted_subscriber_list->result;
            }
        }
        $this->data['subscriber_list'] = $subscriber_list;
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/subscriber/index", $this->data);
    }

    public function create_subscriber() {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('registration_date', 'Registration Date', 'xss_clean|required');
        $this->form_validation->set_rules('expired_date', 'Expired Date', 'xss_clean|required');
        $this->form_validation->set_rules('max_member', 'Max Member', 'xss_clean|required');
        $this->form_validation->set_rules('ip_address', 'IP Address', 'xss_clean|required');
        $this->form_validation->set_rules('ref_user_name', 'Reference User Name', 'xss_clean|required');
        if ($this->input->post('submit_create_subscriber')) {
            if ($this->form_validation->run() == true) {
                $subscriber_info = new stdClass();
                $subscriber_info->registrationDate = $this->input->post('registration_date');
                $subscriber_info->expiredDate = $this->input->post('expired_date');
                $subscriber_info->maxMembers = $this->input->post('max_member');
                $subscriber_info->ipAddress = $this->input->post('ip_address');
                $subscriber_info->referenceUserName = $this->input->post('ref_user_name');
                $result_event = $this->subscriber_model->create_subscriber($subscriber_info);
                if (property_exists($result_event, "responseCode") != FALSE) {
                    $response_code = $result_event->responseCode;
                    if ($response_code == RESPONSE_CODE_SUCCESS) {
                        $this->data['message'] = "Service is created successfully.";
                    } else {
                        $this->data['message'] = 'Error while creating a service.';
                    }
                }
            } else {
                $this->data['message'] = validation_errors();
            }
        }
        $this->data['registration_date'] = array(
            'name' => 'registration_date',
            'id' => 'registration_date',
            'type' => 'text'
        );
        $this->data['expired_date'] = array(
            'name' => 'expired_date',
            'id' => 'expired_date',
            'type' => 'text'
        );
        $this->data['max_member'] = array(
            'name' => 'max_member',
            'id' => 'max_member',
            'type' => 'text'
        );
        $this->data['ip_address'] = array(
            'name' => 'ip_address',
            'id' => 'ip_address',
            'type' => 'text'
        );
        $this->data['ref_user_name'] = array(
            'name' => 'ref_user_name',
            'id' => 'ref_user_name',
            'type' => 'text'
        );
        $this->data['submit_create_subscriber'] = array(
            'id' => 'submit_create_subscriber',
            'name' => 'submit_create_subscriber',
            'type' => 'submit',
            'value' => 'create',
        );
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/subscriber/create_subscriber", $this->data);
    }

    public function update_subscriber($subscriber_id = 0) {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('registration_date', 'Registration Date', 'xss_clean|required');
        $this->form_validation->set_rules('expired_date', 'Expired Date', 'xss_clean|required');
        $this->form_validation->set_rules('max_member', 'Max Member', 'xss_clean|required');
        $this->form_validation->set_rules('ip_address', 'IP Address', 'xss_clean|required');
        if ($this->input->post('submit_update_subscriber')) {
            if ($this->form_validation->run() == true) {
                $subscriber_info = new stdClass();
                $subscriber_info->userId = $subscriber_id;
                $subscriber_info->registrationDate = $this->input->post('registration_date');
                $subscriber_info->expiredDate = $this->input->post('expired_date');
                $subscriber_info->maxMembers = $this->input->post('max_member');
                $subscriber_info->ipAddress = $this->input->post('ip_address');
                $result_event = $this->subscriber_model->update_subscriber($subscriber_info);
                if (property_exists($result_event, "responseCode") != FALSE) {
                    $response_code = $result_event->responseCode;
                    if ($response_code == RESPONSE_CODE_SUCCESS) {
                        $this->data['message'] = "Service is updated successfully.";
                    } else {
                        $this->data['message'] = 'Error while updating a service.';
                    }
                }
            } else {
                $this->data['message'] = validation_errors();
            }
        }
        $subscriber_info = $this->subscriber_model->get_subscriber_info($subscriber_id);
        if (property_exists($subscriber_info, "result")) {
            $subscriber_info = $subscriber_info->result;
        }
        $this->data['subscriber_info'] = $subscriber_info;
        $this->data['registration_date'] = array(
            'name' => 'registration_date',
            'id' => 'registration_date',
            'type' => 'text',
            'value' => $subscriber_info->registrationDate
        );
        $this->data['expired_date'] = array(
            'name' => 'expired_date',
            'id' => 'expired_date',
            'type' => 'text',
            'value' => $subscriber_info->expiredDate
        );
        $this->data['max_member'] = array(
            'name' => 'max_member',
            'id' => 'max_member',
            'type' => 'text',
            'value' => $subscriber_info->maxMembers
        );
        $this->data['ip_address'] = array(
            'name' => 'ip_address',
            'id' => 'ip_address',
            'type' => 'text',
            'value' => $subscriber_info->ipAddress
        );
        $this->data['submit_update_subscriber'] = array(
            'id' => 'submit_update_subscriber',
            'name' => 'submit_update_subscriber',
            'type' => 'submit',
            'value' => 'update',
        );
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE, "admin/subscriber/update_subscriber", $this->data);
    }

}
