<?php
	class Customer_model extends CI_Model{
		function __construct()
	{
		parent::__construct();
	}
		function insert_booking($data){
			$this->db->insert('customer', $data);
		}


		function update_booking($id, $data){
		  	$this->load->library('upload');
		  	//$query = "update customer set gambar = $data where id_customer = '$id' ";
		  	//$data= array('gambar'=>$data);
		  	//$where = "id_customer = '$id' ";
		  	
		   	 $this->db->where('id_customer',$id);
		  	 $this->db->update('customer',$data);

		  	//$str = $this->db->update_string('customer',$data,$where);


		  	//$this->db->query;

		}

		function insert_image($id, $data){

		}

		 function select_by_id ($id){
		   // return $this->db->select('*')->from('customer')->where('id_customer',$id)->limit(1)->result();
				



		    $user = $this->db->get_where('customer',array('id_customer' => $id ))->result_array();

		    return $user;

 			//return $this->db->select()->get_where('customer',array('id_customer')=>$id)->limit(1)->result();


		    	//$this->db->select()->get('customer',1)->where(array('id_customer=>$id')->result_array();
		   }

		  


	}

?>

