<?php
class common_model extends CI_Model{
	function __construct()
	{
		
		$this->load->database();
		parent::__construct();
	}
	function insertData($tableName,$data){
		$this->db->insert($tableName, $data);
		return $this->db->insert_id();
	}
	function updateData($tableName,$data,$where){
		if(count($where)>0){
			foreach($where as $key => $value){
				$this->db->where($key, $value);
			}
		}
		 $up = $this->db->update($tableName, $data);
	}
	function getData($tableName,$where=array(),$order_by=array(),$limit=array()){
		$this->db->select('*');
		if(count($where)>0){
			foreach($where as $key => $value){
				$this->db->where($key, $value);
			}
		}
		
		if(count($order_by)>0){
			foreach($order_by as $key => $value){
				$this->db->order_by($key, $value);
			}
		}
		if(count($limit)>0){
			foreach($limit as $limit => $start){
					$this->db->limit($limit, $start);
				
			}
		}
		if($tableName=="hyundai_comeback_hashtag"){
			$this->db->not_like('text', '#JollyLLB2');
		}
		$Q = $this->db->get($tableName);
		if($Q->num_rows() > 0){
			return $Q->result();
		}else{
			return array();
		}
	}
	function getCountData($tableName,$where=array(),$order_by=array(),$limit=array()){
		$this->db->select('id');
		if(count($where)>0){
			foreach($where as $key => $value){
				$this->db->where($key, $value);
			}
		}
		
		if(count($order_by)>0){
			foreach($order_by as $key => $value){
				$this->db->order_by($key, $value);
			}
		}
		if(count($limit)>0){
			foreach($limit as $limit => $start){
					$this->db->limit($limit, $start);
				
			}
		}
		if($tableName=="hyundai_comeback_hashtag"){
			$this->db->not_like('text', '#JollyLLB2');
		}
		$Q = $this->db->get($tableName);
		return $Q->num_rows();
		
	}
	function deleteData($tableName,$where=array(),$id_not_in=array(),$id_in=array()){
		if(count($where)>0){
			foreach($where as $key => $value){
				$this->db->where($key, $value);
			}
		}
		if(count($id_not_in)>0){
			$this->db->where_not_in('id', $id_not_in);
		}
		if(count($id_in)>0){
			$this->db->where_in('id', $id_in);
		}
		$this->db->delete($tableName); 
	}
	
	function getUsersActivity(){
		$this->db->select('*');
		$this->db->from('users_activity ua'); 
		$this->db->join('users u', 'ua.uid=u.user_id', 'INNER');
		$this->db->where('ua.status', 1);
		$this->db->order_by('ua.id', 'DESC');
		//$this->db->limit(25, 0);
		$Q  = $this->db->get(); 
		if($Q->num_rows() > 0){
			return $Q->result();
		}else{
			return array();
		}
	}
	
	 public function validate(){
        // grab user input
       $username = $this->security->xss_clean($this->input->post('username'));
       $password = $this->security->xss_clean($this->input->post('password'));
        
      	   
	   $array = array('userid' => $username, 'password' => $password);

		$this->db->where($array); 
        
        // Run the query
        $query = $this->db->get('sales_user');
	
		// Let's check if there are any results
        if($query->result_id->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'u_id' => $row->u_id,
                    'userid' => $row->userid,
					'admin' => $row->admin_status,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

  
	
}
?>