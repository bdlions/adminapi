<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model("org/service_model");
    }
    public function index()
    {
        
    }
    
    public function show_services()
    {
        $this->data['service_list'] = $this->service_model->get_all_services();
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,"admin/service/index", $this->data);
    }
    
    public function create_service()
    {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        if ($this->input->post('submit_create_service')) {
            if($this->form_validation->run() == true)
            {
                $additional_data = array(
                    'title' => $this->input->post('title')
                );
                $service_id = $this->service_model->create_service($additional_data);
                if($service_id !== FALSE)
                {
                    $this->data['message'] = "Service is created successfully.";
                }
                else
                {
                    $this->data['message'] = 'Error while creating a service.';
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }            
        }
        $this->data['title'] = array(
            'id' => 'title',
            'name' => 'title',
            'type' => 'text',
        );
        $this->data['submit_create_service'] = array(
            'id' => 'submit_create_service',
            'name' => 'submit_create_service',
            'type' => 'submit',
            'value' => 'create',
        );
        $this->template->load(NULL, "admin/service/create_service", $this->data);
    }
    
    public function update_service($service_id = 0)
    {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        if ($this->input->post('submit_update_service')) {
            if($this->form_validation->run() == true)
            {
                $additional_data = array(
                    'title' => $this->input->post('title')
                );
                if($this->service_model->update_service($service_id, $additional_data))
                {
                    $this->data['message'] = "Service is updated successfully.";
                }
                else
                {
                    $this->data['message'] = 'Error while updating the service.';
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }            
        }
        $service_info = $this->service_model->get_service_info($service_id);
        $this->data['service_info'] = $service_info;
        $this->data['title'] = array(
            'id' => 'title',
            'name' => 'title',
            'type' => 'text',
            'value' => $service_info['title']
        );
        $this->data['submit_update_service'] = array(
            'id' => 'submit_update_service',
            'name' => 'submit_update_service',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(NULL, "admin/service/update_service", $this->data);
    }
}