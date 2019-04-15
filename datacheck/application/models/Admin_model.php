<?php
class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function user_authenticate($uemail,$password){
		$this->db->select('id,status');
		$this->db->from('admin_users');
		$this->db->where('username', $uemail);
		$this->db->where('password', $password);
		$query=$this->db->get();

		if($query-> num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	function getData($tableName,$where=array()){
		$this->db->select('*');
		if(count($where)>0){
			foreach($where as $key => $value){
				$this->db->where($key, $value);
			}
		}
		$Q = $this->db->get($tableName);
		if($Q->num_rows() > 0){
			return $Q->result();
		}else{
			return false;
		}
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
		$this->db->update($tableName, $data);
	}

	function changeStatus($tableName,$status,$id){
		
		$sql="update $tableName set status='".$status."' where id=$id";
		$this->db->query($sql);
		echo $status;
	}
	
	function getNewsData($sqlData){
        $this->db->select('*');
        $this->db->from('news');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('status', '-1');
            } else {
                $this->db->where('status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query; 	
        }
    }
	
	function getProductsData($sqlData){
        $this->db->select('*');
        $this->db->from('products');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('status', '-1');
            } else {
                $this->db->where('status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query; 	
        }
    }
	
	function getRoadmapData($sqlData){
        $this->db->select('*');
        $this->db->from('roadmap');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('status', '-1');
            } else {
                $this->db->where('status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query; 	
        }
    }
	
		function getRoadmapGalData($sqlData){
        $this->db->select('*');
        $this->db->from('raodmap_gallery');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('status', '-1');
            } else {
                $this->db->where('status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query; 	
        }
    }
	
	
	function getOrderDataExport(){
        $this->db->select('p.name as product_name,o.quantity,o.price_per_porduct,o.total,o.customer_name,o.email,o.mobile,o.b_address as billing_address,o.b_landmark,o.b_city as billing_city,o.b_state as billing_state,o.b_country as billing_country,o.b_pin as billing_pincode,o.b_phone as billing_home_phone,o.s_address as shipping_address,o.s_landmark,o.s_city as shipping_city,o.s_state as shipping_state,o.s_country as shipping_country,o.s_pin as shipping_pincode,o.s_phone as shipping_home_phone,o.added_on,o.ip_address');
        $this->db->from('orders as o');
		$this->db->join('products as p', 'p.id = o.product_id');
		$this->db->order_by("o.id", "DESC");
		$query=$this->db->get();
		if($query-> num_rows() > 0){
			return $query->result();
		}
    }

    //get prod doc
    function getProductDocData($sqlData){
        $this->db->select('product_doc.id,products.name,products.description,product_doc.gallery_image,product_doc.status,');
        $this->db->from('product_doc');
        $this->db->join('products', 'products.id = product_doc.product_id');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('product_doc.status', '-1');
            } else {
                $this->db->where('product_doc.status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query;  
        }
    }

     //get product video
    function getProductVideoData($sqlData){
       

        $this->db->select('product_video.id,products.name,product_video.description,product_video.link_name,product_video.status');
        $this->db->from('product_video');
        $this->db->join('products', 'products.id = product_video.product_id');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('product_video.status', '-1');
            } else {
                $this->db->where('product_video.status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query;  
        }
    }

     //get gallery
    function getGalleryData($sqlData){
       

        $this->db->select('*');
        $this->db->from('gallery');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('status', '-1');
            } else {
                $this->db->where('status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query;  
        }
    }

    function getGalleryImageData($sqlData){
        $this->db->select('gallery_image.id,gallery.name,gallery_image.description,gallery_image.gallery_image,gallery_image.status');
        $this->db->from('gallery_image');
        $this->db->join('gallery', 'gallery.id = gallery_image.gallery_id');

        if(isset($sqlData['id']) && $sqlData['id']!=''){
            $this->db->where('id', $sqlData['id']);
        }

        if(isset($sqlData['status']) && $sqlData['status'] != '') {
            if ($sqlData['status'] == '-1') {
                $this->db->where_not_in('gallery_image.status', '-1');
            } else {
                $this->db->where('gallery_image.status', $sqlData['status']);
            }
        }

        if(isset($sqlData['orderByField']) && isset($sqlData['orderByFieldValue']) && $sqlData['orderByField']!='' && $sqlData['orderByFieldValue']!=''){
            $this->db->order_by($sqlData['orderByField'], $sqlData['orderByFieldValue']);
        }

        if(isset($sqlData['searchByField']) && isset($sqlData['searchByFieldValue']) && $sqlData['searchByField']!='' && $sqlData['searchByFieldValue']!=''){
            $this->db->like($sqlData['searchByField'], $sqlData['searchByFieldValue']); 
        }

        $perPage=getPerPageNo();
        if(isset($sqlData['perPage']) && $sqlData['perPage']!=''){
            if($sqlData['perPage']!='pagi'){
                $this->db->limit($perPage,$sqlData['perPage']);
            }
        }else{
            $this->db->limit($perPage);
        }

        $query=$this->db->get();
        if(isset($sqlData['perPage']) && $sqlData['perPage']=='pagi'){
            return $query->num_rows();
        }else{
            return $query;  
        }
    }
}
?>