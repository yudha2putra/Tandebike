<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Data extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Data_model');
    }
	
	public function getAllPlate_get()
	{
		$hasil = $this->Data_model->getAllPlate();
        $this->response($hasil);	
	}
	
	public function getAvailablePlate_get()
	{
		$hasil = $this->Data_model->getAvailablePlate();
        $this->response($hasil);	
	}
	
	public function getBookingStatus_get()
	{
		$hasil = $this->Data_model->getBookingStatus($this->get('plateNo'), $this->get('id_user'));
		$this->response($hasil);
	}
	
	public function setBooking_get()
	{
		$hasil = $this->Data_model->setBooking($this->get('plateNo'), $this->get('id_user'));
		$this->response($hasil);
	}
	
	public function login_post()
    {
        $message = [
            'email' => $this->post('email'),
            'password' => $this->post('password')
        ];
		$hasil = $this->Data_model->login_user($message);
        $this->response($hasil);
    }	
	
	public function users_post()
    {
        $message = [
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
        ];
		$hasil = $this->Data_model->insert_user($message);
		$this->response($hasil);
    }
    
}