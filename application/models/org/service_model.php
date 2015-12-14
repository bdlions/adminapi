<?php
class Service_model extends Ion_auth_model 
{
    public function __construct() {
        parent::__construct();    
    }
    /*
     * This method will return service info
     * @param $service_id, service id
     */
    public function get_service_info($service_id)
    {
        $service_info = array(
            'service_id' => 1,
            'title' => 'Bkash Send Money'
        );
        return $service_info;
    }
    /*
     * This method will return service list
     */
    public function get_all_services()
    {
        $service_list = array(
            array(
                'service_id' => 1,
                'title' => 'Bkash Send Money'
            ),
            array(
                'service_id' => 2,
                'title' => 'Grameen Phone Recharge'
            )
        );
        return $service_list;
    }
    /*
     * This method will create a new service
     * @param $service_data, service data
     */
    public function create_service($service_data)
    {
        return 1;
    }
    /*
     * This method will update a service info
     * @param $service_id, service id
     * @param $service_data, service data
     */
    public function update_service($service_id, $service_data)
    {
        return true;
    }
    
    public function delete_service()
    {
        
    }
}