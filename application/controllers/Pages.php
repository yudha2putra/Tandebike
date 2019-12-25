<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function view($page = 'index')
    {        
       
        $data = array();
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        $data = $this->getData($page);
        $this->load->view('pages/' . $page, $data);
    
    }

    function getData($page){
        $return = array();
        switch($page){
            case 'data':
                $this->load->model('Data_model');
                $return['resultDevice'] = $this->Data_model->getStatus();
				$return['resultUser'] = $this->Data_model->getAllUser();
				$return['resultVehicle'] = $this->Data_model->getAllPlate();
				$return['resultBooking'] = $this->Data_model->getAllBooking();
				$return['resultFinishedBooking'] = $this->Data_model->getAllFinishedBooking();
                return $return;
                break;
        }
    }
}
?>
