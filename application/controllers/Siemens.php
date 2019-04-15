<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siemens extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct() {
	parent::__construct();
	//$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->helper('url');
	$this->load->model('common_model');
	$this->data = new stdClass();
	}
	
	 
	public function index()
	{
		$where=array("status"=>1);
		$this->data->news=$this->common_model->getData('news',$where);
		$this->data->product=$this->common_model->getData('products',$where);
        $this->data->product_videos=$this->common_model->getData('product_video',$where);
         $this->data->product_docs=$this->common_model->getData('product_doc',$where);
		//$get_product_data=$this->common_model->getProductData();
		//echo "<pre>"; print_r( $this->data->product_videos); die;
		
		//echo "<pre>"; print_r($product_data); die;
		$this->data->roadmap=$this->common_model->getData('roadmap',$where);
		$this->data->raodmap_gallery=$this->common_model->getData('raodmap_gallery',$where);
		$this->data->gallery=$this->common_model->getData('gallery',$where);
		$this->data->gallery_image=$this->common_model->getData('gallery_image',$where);
		//echo "<pre>"; print_r($this->data->gallery); die;
		$this->load->view('index',$this->data);	
		//$this->load->view('footer');
	}
	
	public function master_login()
	{

	//$this->load->view('footer');
	$this->load->view('master_login');		
	}
	
	public function thankyou()
	{

	//$this->load->view('footer');
	$this->load->view('thankyou');		
	}
	
	public function feedback()
	{
	$data = "";
	//$this->load->view('footer');
	$this->load->view('feedback',$data);
		
	}
	
	public function process(){
        // Load the model
        $this->load->model('common_model');
        // Validate the user can login
        $result = $this->common_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
			echo $msg;
        }else{
            
            redirect('feedback');
			
        }        
    }
	
	
	public function sales_reg_submit() {

		//$num_str = sprintf("%06d", mt_rand(1, 999999)); 
		$created = date('Y-m-d H:i:s');
		
		$data = array(	
		'admin_status' => 0,
		'f_name' => $this->input->post('fname'),
		'l_name' => $this->input->post('lname'),
		'userid' => $this->input->post('email'),
		'password' => $this->input->post('psw'),		
		'created' => date("Y-m-d H:i:s"),
		'ip' => $_SERVER['REMOTE_ADDR']
 		);
		//print_r($data);
		
		$this->common_model->insertData('sales_user',$data);
	}
	
	public function get_user_data() {
	$data = "";
	$phone = $_POST['number'];
	$data["results"] = $this->common_model->getData('users',array('mobile'=>$phone));
	$data = $data["results"];
	//print_r($data);
	echo json_encode($data);
	return;	
    }

	public function otp_user_data() {
	$num_str = sprintf("%06d", mt_rand(1, 999999));	
	$phone = $_POST['number'];
	$number_reg = "This number already register";
	$number_reg = array('number_reg'=>$number_reg);
	
	$data = array(
		'mobile' => $phone,
		'otp' => $num_str,	
		'created' => date("Y-m-d H:i:s"),
		'ip' => $_SERVER['REMOTE_ADDR']
		);
	
	$results = $this->common_model->getData('users',array('mobile'=>$phone));
	if(count($results)==1){
		echo json_encode($number_reg);
	}else{
	
	$results = $this->common_model->getData('temp_otp',array('mobile'=>$phone));
	if(count($results)==1){		
		$results = $this->common_model->updateData('temp_otp',array('otp'=>$num_str),array('mobile'=>$phone));	
			$num_str1 = array('num_str'=>$num_str);
		echo json_encode($num_str1);		
	}else{
		$results = $this->common_model->insertData('temp_otp',$data);
		$num_str1 = array('num_str'=>$num_str);
		echo json_encode($num_str1);		
	}
		
		// OTP code start here
		
			//You need to change your settings below.
		//---------------------------------
		$username = "jeevanm";
		$mypassword = "Testingg@123";
		$sendername = "DEMOSG";
		$domain = "www.smsgatewaycenter.com";
		//API Domain
		$type = "Individual"; 
		//Individual/Bulk/Group
		$lang = "English";
		//English/Other - Default is English
		$method = "POST";
		//---------------------------------
	
	
		$mobile = $phone;
		$message = "Your OTP for registration is ".$num_str; 
		//sanitize inputs
		$username = urlencode($username);
		$mypassword = urlencode($mypassword);
		$sendername = urlencode($sendername);
		$message = urlencode($message);

		$parameters = "UserName=".$username."&Password=".$mypassword."&Type=".$type."&To=".$mobile."&Mask=".$sendername."&Message=".$message."&Language=".$lang;
		$apiurl = "http://".$domain."/library/send_sms_2.php";
		$ch = curl_init($apiurl);
		
		if($method == "POST"){
			curl_setopt($ch, CURLOPT_POST,1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
		} else {
			$get_url = $apiurl."?".$parameters;
			curl_setopt($ch, CURLOPT_POST,0);
			curl_setopt($ch, CURLOPT_URL, $get_url);
		}

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
		curl_setopt($ch, CURLOPT_HEADER,0);
		// DO NOT RETURN HTTP HEADERS 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		// RETURN THE CONTENTS OF THE CALL
		$return_val = curl_exec($ch);
		
	//	if($return_val=="")echo "Process Failed, Please check domain, username and password."; else echo $return_val;
	
	
	// OTP code end here
	}
		return;
	}
	
	public function otp_feeduser_data() {
	$num_str = sprintf("%06d", mt_rand(1, 999999));
	$phone = $_POST['number'];
	$number_reg = "This number already register";
	$number_reg = array('number_reg'=>$number_reg);
	
	$data = array(
		'mobile' => $phone,
		'otp' => $num_str,	
		'created' => date("Y-m-d H:i:s"),
		'ip' => $_SERVER['REMOTE_ADDR']
		);	
	
	$results = $this->common_model->getData('temp_otp',array('mobile'=>$phone));
	if(count($results)==1){		
		$results = $this->common_model->updateData('temp_otp',array('otp'=>$num_str),array('mobile'=>$phone));	
			$num_str = array('num_str'=>$num_str);
		echo json_encode($num_str);		
	}else{
		$results = $this->common_model->insertData('temp_otp',$data);
		$num_str = array('num_str'=>$num_str);
		echo json_encode($num_str);		
	}
		return;		
	}
	
	
	public function user_submit() {

		$num_str = sprintf("%06d", mt_rand(1, 999999)); 
		//$created = date('Y-m-d H:i:s');
		
		$data = array(				
		'sales_p_id' => $this->input->post('sales_p_id'),
		'fullname' => $this->input->post('rfullname'),
		'email' => $this->input->post('remail'),
		'mobile' => $this->input->post('rmobile'),
		'location' => $this->input->post('location'),	
		'created' => date("Y-m-d H:i:s"),
		'ip' => $_SERVER['REMOTE_ADDR']
 		);
		
		//$insert_data=array("user_id"=>$this->session->userdata('uid'),"	random_id"=>$random_id,"ans1"=>$ans1,"ans2"=>$ans2,"ans3"=>$ans3,"ans4"=>$ans4,"ans5"=>$ans5,"ans6"=>$ans6,"created"=>$created,"ans3"=>$ans3);
		 $this->common_model->insertData('users',$data);
		 echo json_encode($data);
		 return;
		 
	}
	
	public function user_data_submit() {

		$num_str = sprintf("%06d", mt_rand(1, 999999)); 
		//$created = date('Y-m-d H:i:s');
		
		$data = array(
		'sales_p_id'=> $this->session->userdata('u_id'),
		'fullname' => $this->input->post('fullname'),
		'email' => $this->input->post('email'),
		'mobile' => $this->input->post('feedmobile'),
		'location' => $this->input->post('location'),
		'feed1' => $this->input->post('feed1'),
		'feed2' => $this->input->post('feed2'),
		'feed3' => $this->input->post('feed3'),
		'feed4' => $this->input->post('feed4'),
		'feed5' => $this->input->post('feed5'),		
		'created' => date("Y-m-d H:i:s"),
		'ip' => $_SERVER['REMOTE_ADDR']
 		);
		
		
		 $this->common_model->insertData('s_feedback',$data);
		 echo json_encode($data);
		  return;
	}
	
	public function logout(){
		$this->reset_session();
		redirect(SITE_URL);
	}
	
	private function reset_session(){
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('u_id');
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('admin');		
		
	}
	
}
