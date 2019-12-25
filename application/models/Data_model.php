<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Data_model extends CI_Model {

        public function updateVehicleStatus($update)
        {
            $this->db->insert('Vehicle_Status', $update);    
        }
		
		public function insertBookingStatus($update)
        {
            $this->db->insert('Booking', $update);    
        }
		
		public function stopBookingStatus($plateNo = null)
        {
			$this->db->set('closed_at', 'NOW()',FALSE);
			$this->db->where('plateNo', $plateNo);
			$this->db->update('Booking');
        }
		
		public function setFinishedBooking()
		{

			$this->db->query("INSERT Booking_Finished SELECT * FROM Booking");
		}

		
		public function setCheckIn($plateNo = null)
        {
			$this->db->set('check_in', 1,FALSE);
			$this->db->where('plateNo', $plateNo);
			$this->db->update('Booking');
        }

		public function deleteBookingStatus($plateNo = null)
		{
			$this->db->where('plateNo', $plateNo);
			$this->db->delete('Booking');
		}
		
		public function getStatus($id = null)
        {
			$this->db->query("SET time_zone='+7:00'");
            if(isset($id)){
                $this->db->where('id_device', $id);
            }
            $this->db->select('*');
            $this->db->from('Vehicle_Status');
            $this->db->order_by('timeStamp', 'desc');
            $this->db->limit(100);
            
            $query = $this->db->get();
            return $query->result_array();
        }
		
		public function getAllPlate()
		{
			$this->db->select('*');
            $this->db->from('Vehicle');
            $return = $this->db->get();
            return $return->result_array();	
		}
		
		public function getAllUser()
		{
			$this->db->select('*');
            $this->db->from('Users');
            $return = $this->db->get();
            return $return->result_array();	
		}
		
		public function getAvailablePlate()
		{
			$this->db->select('Vehicle.plateNo, Vehicle.bikeType');
            $this->db->from('Vehicle');
			$this->db->join('Booking', 'Vehicle.plateNo = Booking.plateNo','left');
			$this->db->where('Booking.plateNo', NULL);
            $return = $this->db->get();
            return $return->result_array();	
		}
		
		public function getBookingStatus($plateNo = null, $id_user = null)
		{
			$this->db->select('check_in');
			$this->db->from('Booking');
			$this->db->where('plateNo',$plateNo)->where('id_user',$id_user);
			$query = $this->db->get();
			if(empty($query->result())){
				// no records to display
				return $query->result_array();
			} else {
				// records have been returned
				$this->setCheckIn($plateNo);
				return $query->result_array();
			}
				
		}
		
		public function getAllBooking()
        {
            $this->db->select('*');
            $this->db->from('Booking');
            $query = $this->db->get();
            return $query->result_array();
        }
		
		public function getAllFinishedBooking()
		{
			$this->db->select('*');
			$this->db->from('Booking_Finished');
			$query = $this->db->get();
			return $query->result_array();
		}
		
	   public function insert_user($data)
	   {
       		$this->nama    = $data['nama']; // please read the below note
		    $this->email    = $data['email']; // please read the below note
	        $this->password  = $data['password'];
	        if($this->db->insert('Users',$this))
	        {    
	            return 'Data is inserted successfully';
	        }
	        else
	        {
	            return "Error has occured";
	        }
	    }
		
		public function login_user($data)
	   {
			$this->db->select('*');
			$this->db->from('Users');
			$this->db->where('email', $data['email'])->where('password',$data['password']);;
            $query = $this->db->get();
            return $query->result_array();
	    }
    }
    
    
    /* End of file Data_model.php */
    
?>