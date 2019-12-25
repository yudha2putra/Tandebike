<?php

defined('BASEPATH') or exit('No direct script access allowed');

class IOT extends CI_Controller
{
    public function updateVehicleStatus($plateNo = null)
    {
        $update = array();
        if (null !== ($this->input->get('status'))) $update['status'] = $this->input->get('status');
        $update['plateNo'] = $plateNo;

        $this->load->model('Data_model');
        if ($plateNo !== null) {
            $this->Data_model->updateVehicleStatus($update);
        }  
    }
	
	public function insertBooking($plateNo = null)
	{
		$insert = array();
        if (null !== ($this->input->get('id_user'))) $insert['id_user'] = $this->input->get('id_user');
        $insert['plateNo'] = $plateNo;

        $this->load->model('Data_model');
        if ($plateNo !== null) {
            $this->Data_model->insertBookingStatus($insert);
        }  
	}
	
	public function stopBooking($plateNo = null)
	{
        $insert['plateNo'] = $plateNo;

        $this->load->model('Data_model');
        if ($plateNo !== null) {
            $this->Data_model->stopBookingStatus($plateNo);
			$this->Data_model->setFinishedBooking();
			$this->Data_model->deleteBookingStatus($plateNo);
        }  
	}
	
}

/* End of file IOT.php */

?>