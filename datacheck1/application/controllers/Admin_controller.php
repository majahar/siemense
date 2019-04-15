<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('common','html_control'));
		$this->load->model('admin_model');
	}
	
	public function index()
	{
		if($this->session->userdata('ADMIN_LOGEDIN')){
			redirect(SITE_PATH.'dashboard');
			die();
		}
		$this->load->view('top');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function login()
	{
		if($this->session->userdata('ADMIN_LOGEDIN')){
			redirect(SITE_PATH.'dashboard');
			die();
		}
		$this->load->view('top');
		
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function logout()
	{
		$user_details=array("ADMIN_LOGEDIN"=>false,"ADMIN_ID"=>"");
		$this->session->set_userdata($user_details);
		redirect(SITE_PATH);
		die();
	}
	
	public function authenticate()
	{
		if($this->input->post('uemail') && $this->input->post('upwd')){
			$uemail=$this->input->post('uemail');
			$password=$this->input->post('upwd');
			$user_authenticate=$this->admin_model->user_authenticate($uemail,$password);
			if(count($user_authenticate['0']) > 0){
				$status=$user_authenticate['0']->status;
				if($status=='1'){
					$user_details=array("ADMIN_LOGEDIN"=>true,"ADMIN_ID"=>$user_authenticate['0']->id);
					$this->session->set_userdata($user_details);
					$status='done';
				}elseif($status=='0'){
					$status='error||Account deactivated';
				}elseif($status=='-1'){
					$status='error||Account deleted';
				}
			}else{
				$status='error||Please enter valid details';
			}
		}else{
			$status='error||Please enter username and password';
		}
		echo $status;
	}
	
	public function dashboard(){
		$this->validSession();
		$this->load->view('top');
		$this->load->view('sidebar');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	
	public function validSession(){
		if(!$this->session->userdata('ADMIN_LOGEDIN')){
			redirect(SITE_PATH.'login');
		}
	}
	
	public function status(){
		
		if($this->input->post('i')){
			$id=$this->input->post('i');
		}
		
		if($this->input->post('t')){
			$tableName=$this->input->post('t');
		}
		
		if($this->input->post('s')){
			$status=$this->input->post('s');
		}
		
		$data['count_page']=$this->admin_model->changeStatus($tableName,$status,$id);
	}
	
	public function getPaginationHTML($rowCount,$selectTab){
		$perPage=getPerPageNo();
	
		$HTML='<ul class="pagination">';
			for($i=0;$i<$rowCount;$i++){
				$num=$i*$perPage;
				$class='';
				if($i==$selectTab){
					$class='active';
				}
				
				$pageNo=$i+1;
				$HTML.='<li class="paginate_button '.$class.'" aria-controls="dataTables-example" tabindex="0" id="pageId'.$i.'">
					<a href="javascript:void(0)" onclick=generatePagi("'.$i.'","'.$num.'")>'.$pageNo.'</a>
				</li>';
			}
		$HTML.='</ul>';
		return $HTML;
	}
	
	// Products...
	public function products($status = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $data['sectionName'] = 'Products';
        $tableName = 'products';
        $data['thisPath'] = SITE_PATH . 'products/';

        if (isset($_GET['perPage']) && $_GET['perPage'] != '') {
            $sqlData['perPage'] = $_GET['perPage'];
            $sqlData1['perPage'] = $_GET['perPage'];
        } else {
            $sqlData['perPage'] = '0';
            $sqlData1['perPage'] = '0';
        }

        if (isset($_GET['status']) && $_GET['status'] != '') {
            $sqlData['status'] = $_GET['status'];
        } else {
            $sqlData['status'] = '-1';
        }

        if (isset($_GET['selectTab']) && $_GET['selectTab'] != '') {
            $sqlData['selectTab'] = $_GET['selectTab'];
        } else {
            $sqlData['selectTab'] = '0';
        }

        if (isset($_GET['orderByField']) && $_GET['orderByField'] != '') {
            $sqlData['orderByField'] = $_GET['orderByField'];
        } else {
            $sqlData['orderByField'] = '';
        }

        if (isset($_GET['orderByFieldValue']) && $_GET['orderByFieldValue'] != '') {
            $sqlData['orderByFieldValue'] = $_GET['orderByFieldValue'];
        } else {
            $sqlData['orderByFieldValue'] = '';
        }

        if (isset($_GET['searchByField']) && $_GET['searchByField'] != '') {
            $sqlData['searchByField'] = $_GET['searchByField'];
        } else {
            $sqlData['searchByField'] = '';
        }

        if (isset($_GET['searchByFieldValue']) && $_GET['searchByFieldValue'] != '') {
            $sqlData['searchByFieldValue'] = $_GET['searchByFieldValue'];
        } else {
            $sqlData['searchByFieldValue'] = '';
        }

        $sqlDataArr['listing'] = $this->admin_model->getProductsData($sqlData);
        $data['paginationHTML'] = '';
        if ($sqlDataArr['listing']->num_rows() > 0) {
            $HTML = '';
            $sqlData['perPage'] = 'pagi';
            $rowCount = $this->admin_model->getProductsData($sqlData);
            $rowCount = getPagination($rowCount);

            $data['paginationHTML'] = $this->getPaginationHTML($rowCount, $sqlData['selectTab']);
            foreach ($sqlDataArr['listing']->result() as $list) {
                $HTML .= '<tr class="gradeA even">';
                $HTML .= '<td>' . $list->id . '</td>';
                $HTML .= '<td>' . $list->name . '</td>';
                $HTML .= '<td>' . $list->link_name . '</td>';
                if ($list->image) {
                    $image = '<img src="' . SITE_PRODUCTS_IMAGES_PATH . $list->image . '" width="100" >';
                } else {
                    $image = '';
                }
                $HTML .= '<td>' . $image . '</td>';
                $HTML .= '<td>';
                $HTML .= '<span id=box' . $list->id . '>';
                if ($list->status == '1') {
                    $HTML .= '<a title="Active" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","0","' . $list->id . '")>' . ACTIVE_ICON . '</a>';
                } else {
                    $HTML .= '<a title="Deactive" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","1","' . $list->id . '")>' . DEACTIVE_ICON . '</a>';
                }
                $HTML .= '</span>';
                $HTML .= '&nbsp;&nbsp;';
                $HTML .= '<a title="EDIT" href="' . SITE_PATH . 'addProducts/' . $list->id . '" >' . EDIT_ICON . '</a>';
                $HTML .= '&nbsp;&nbsp;&nbsp;&nbsp';
                $HTML .= '<a title="Delete" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","-1","' . $list->id . '")>' . DELETE_ICON . '</a>';
                $HTML .= '</td>';
                $HTML .= '</tr>';
            }
        } else {
            $HTML = '<tr class="gradeA even"><td colspan="10" align="center">Data Not Found</td></tr>';
        }
        $data['HTML'] = $HTML;

        $data['status'] = $sqlData['status'];
        $data['orderByField'] = $sqlData['orderByField'];
        $data['orderByFieldValue'] = 'asc';
        $orderByFieldValueChange = '';

        if (isset($_GET['orderByFieldValueChange']) && $_GET['orderByFieldValueChange'] == 'yes') {
            $orderByFieldValueChange = 'yes';
            $data['orderByFieldValue'] = $sqlData['orderByFieldValue'];
        }

        $data['searchByField'] = $sqlData['searchByField'];
        $data['searchByFieldValue'] = $sqlData['searchByFieldValue'];
        $data['orderByFieldValueChange'] = $orderByFieldValueChange;
        $data['selectTab'] = $sqlData['selectTab'];
        $data['perPage'] = $sqlData1['perPage'];

        $this->load->view('products', $data);
        $this->load->view('footer');
    }

    public function addProducts($id = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $tableName = 'products';
        if ($id > 0) {
            $data['sectionName'] = 'Edit Product';
        } else {
            $data['sectionName'] = 'Add Product';
        }
        $form_data['id'] = $id;
        $form_data['name'] = '';
        $form_data['link_name'] = '';
		$form_data['hiddenimage'] = '';
        $form_data['status'] = '';
        if ($id > 0) {
            $result = $this->admin_model->getData($tableName, array("id" => $id));
            if ($result) {

                $form_data['name'] = $result[0]->name;
                $form_data['link_name'] = $result[0]->link_name;
                $form_data['hiddenimage'] = $result[0]->image;
                $form_data['status'] = $result[0]->status;
            }
        }
        $data['form_data'] = $form_data;
        if ($this->input->post('action') == "Submit") {
            $data['form_data'] = $this->input->post();
            $form_data['name'] = $this->input->post('name');
            $form_data['link_name'] = $this->input->post('link_name');
            if ($_FILES['image']['name'] != '') {
                $fileTmpLoc = $_FILES['image']['tmp_name'];
                $form_data['image'] = make_valid_image_name($_FILES['image']['name']);
                $pathAndName = SERVER_PRODUCTS_IMAGES_PATH . $form_data['image'];
                if (strlen($this->input->post('hiddenimage')) > 0) {
                    unlink(SERVER_PRODUCTS_IMAGES_PATH . $this->input->post('hiddenimage'));
                }
                $transfer = move_uploaded_file($fileTmpLoc, $pathAndName);
            } else {
                $form_data['image'] = $this->input->post('hiddenimage');
            }
            $form_data['status'] = $this->input->post('status');
            $form_data['added_on'] = date("Y-m-d H:i:s");
            if ($id > 0) {
                unset($form_data['hiddenimage']);
                $this->admin_model->updateData($tableName, $form_data, array("id" => $id));
                redirect('products');
            } else {
                unset($form_data['hiddenimage']);
                $id = $this->admin_model->insertData($tableName, $form_data);
                if ($id > 0) {
                    redirect('products');
                }
            }
        }
        $this->load->view('addProducts', $data);
        $this->load->view('footer');
    }
	
	
	// News...
	public function news($status = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $data['sectionName'] = 'News';
        $tableName = 'news';
        $data['thisPath'] = SITE_PATH . 'news/';

        if (isset($_GET['perPage']) && $_GET['perPage'] != '') {
            $sqlData['perPage'] = $_GET['perPage'];
            $sqlData1['perPage'] = $_GET['perPage'];
        } else {
            $sqlData['perPage'] = '0';
            $sqlData1['perPage'] = '0';
        }

        if (isset($_GET['status']) && $_GET['status'] != '') {
            $sqlData['status'] = $_GET['status'];
        } else {
            $sqlData['status'] = '-1';
        }

        if (isset($_GET['selectTab']) && $_GET['selectTab'] != '') {
            $sqlData['selectTab'] = $_GET['selectTab'];
        } else {
            $sqlData['selectTab'] = '0';
        }

        if (isset($_GET['orderByField']) && $_GET['orderByField'] != '') {
            $sqlData['orderByField'] = $_GET['orderByField'];
        } else {
            $sqlData['orderByField'] = '';
        }

        if (isset($_GET['orderByFieldValue']) && $_GET['orderByFieldValue'] != '') {
            $sqlData['orderByFieldValue'] = $_GET['orderByFieldValue'];
        } else {
            $sqlData['orderByFieldValue'] = '';
        }

        if (isset($_GET['searchByField']) && $_GET['searchByField'] != '') {
            $sqlData['searchByField'] = $_GET['searchByField'];
        } else {
            $sqlData['searchByField'] = '';
        }

        if (isset($_GET['searchByFieldValue']) && $_GET['searchByFieldValue'] != '') {
            $sqlData['searchByFieldValue'] = $_GET['searchByFieldValue'];
        } else {
            $sqlData['searchByFieldValue'] = '';
        }

        $sqlDataArr['listing'] = $this->admin_model->getNewsData($sqlData);
				
        $data['paginationHTML'] = '';
        if ($sqlDataArr['listing']->num_rows() > 0) {
            $HTML = '';
            $sqlData['perPage'] = 'pagi';
            $rowCount = $this->admin_model->getNewsData($sqlData);
            $rowCount = getPagination($rowCount);

            $data['paginationHTML'] = $this->getPaginationHTML($rowCount, $sqlData['selectTab']);
            foreach ($sqlDataArr['listing']->result() as $list) {
                $HTML .= '<tr class="gradeA even">';
                $HTML .= '<td>' . $list->id . '</td>';
                $HTML .= '<td>' . $list->heading . '</td>';
                $HTML .= '<td>' . $list->description . '</td>';
                if ($list->image) {
                    $image = '<img src="' . SITE_PRODUCTS_IMAGES_PATH . $list->image . '" width="100" >';
                } else {
                    $image = '';
                }
                $HTML .= '<td>' . $image . '</td>';
                $HTML .= '<td>';
                $HTML .= '<span id=box' . $list->id . '>';
                if ($list->status == '1') {
                    $HTML .= '<a title="Active" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","0","' . $list->id . '")>' . ACTIVE_ICON . '</a>';
                } else {
                    $HTML .= '<a title="Deactive" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","1","' . $list->id . '")>' . DEACTIVE_ICON . '</a>';
                }
                $HTML .= '</span>';
                $HTML .= '&nbsp;&nbsp;';
                $HTML .= '<a title="EDIT" href="' . SITE_PATH . 'addNews/' . $list->id . '" >' . EDIT_ICON . '</a>';
                $HTML .= '&nbsp;&nbsp;&nbsp;&nbsp';
                $HTML .= '<a title="Delete" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","-1","' . $list->id . '")>' . DELETE_ICON . '</a>';
                $HTML .= '</td>';
                $HTML .= '</tr>';
            }
        } else {
            $HTML = '<tr class="gradeA even"><td colspan="10" align="center">Data Not Found</td></tr>';
        }
        $data['HTML'] = $HTML;

        $data['status'] = $sqlData['status'];
        $data['orderByField'] = $sqlData['orderByField'];
        $data['orderByFieldValue'] = 'asc';
        $orderByFieldValueChange = '';

        if (isset($_GET['orderByFieldValueChange']) && $_GET['orderByFieldValueChange'] == 'yes') {
            $orderByFieldValueChange = 'yes';
            $data['orderByFieldValue'] = $sqlData['orderByFieldValue'];
        }

        $data['searchByField'] = $sqlData['searchByField'];
        $data['searchByFieldValue'] = $sqlData['searchByFieldValue'];
        $data['orderByFieldValueChange'] = $orderByFieldValueChange;
        $data['selectTab'] = $sqlData['selectTab'];
        $data['perPage'] = $sqlData1['perPage'];

        $this->load->view('news', $data);
        $this->load->view('footer');
    }

    public function addNews($id = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $tableName = 'news';
        if ($id > 0) {
            $data['sectionName'] = 'Edit News';
        } else {
            $data['sectionName'] = 'Add News';
        }
        $form_data['id'] = $id;
        $form_data['heading'] = '';
        $form_data['description'] = '';
        $form_data['link_name'] = '';
		$form_data['newlink'] = '';
        $form_data['hiddenimage'] = '';
        $form_data['status'] = '';
        if ($id > 0) {
            $result = $this->admin_model->getData($tableName, array("id" => $id));
            if ($result) {

                $form_data['heading'] = $result[0]->heading;
                $form_data['description'] = $result[0]->description;
                $form_data['link_name'] = $result[0]->link_name;
				$form_data['newlink'] = $result[0]->newlink;
                $form_data['hiddenimage'] = $result[0]->image;
                $form_data['status'] = $result[0]->status;
            }
        }
        $data['form_data'] = $form_data;
        if ($this->input->post('action') == "Submit") {
            $data['form_data'] = $this->input->post();
            $form_data['heading'] = $this->input->post('name');
            $form_data['description'] = $this->input->post('description');
            $form_data['link_name'] = $this->input->post('link_name');
			$form_data['newlink'] = $this->input->post('newlink');
			$form_data['newsdate'] = $this->input->post('newsdate');
            if ($_FILES['image']['name'] != '') {
                $fileTmpLoc = $_FILES['image']['tmp_name'];
                $form_data['image'] = make_valid_image_name($_FILES['image']['name']);
                $pathAndName = SERVER_PRODUCTS_IMAGES_PATH . $form_data['image'];
                if (strlen($this->input->post('hiddenimage')) > 0) {
                    unlink(SERVER_PRODUCTS_IMAGES_PATH . $this->input->post('hiddenimage'));
                }
                $transfer = move_uploaded_file($fileTmpLoc, $pathAndName);
            } else {
                $form_data['image'] = $this->input->post('hiddenimage');
            }
            $form_data['status'] = $this->input->post('status');
            $form_data['added_on'] = date("Y-m-d H:i:s");
            if ($id > 0) {
                unset($form_data['hiddenimage']);
                $this->admin_model->updateData($tableName, $form_data, array("id" => $id));
                redirect('news');
            } else {
                unset($form_data['hiddenimage']);
                $id = $this->admin_model->insertData($tableName, $form_data);
                if ($id > 0) {
                    redirect('news');
                }
            }
        }
        $this->load->view('addNews', $data);
        $this->load->view('footer');
    }
	
	
	// Roadmap...
	public function roadmap($status = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $data['sectionName'] = 'Roadmap';
        $tableName = 'roadmap';
        $data['thisPath'] = SITE_PATH . 'roadmap/';

        if (isset($_GET['perPage']) && $_GET['perPage'] != '') {
            $sqlData['perPage'] = $_GET['perPage'];
            $sqlData1['perPage'] = $_GET['perPage'];
        } else {
            $sqlData['perPage'] = '0';
            $sqlData1['perPage'] = '0';
        }

        if (isset($_GET['status']) && $_GET['status'] != '') {
            $sqlData['status'] = $_GET['status'];
        } else {
            $sqlData['status'] = '-1';
        }

        if (isset($_GET['selectTab']) && $_GET['selectTab'] != '') {
            $sqlData['selectTab'] = $_GET['selectTab'];
        } else {
            $sqlData['selectTab'] = '0';
        }

        if (isset($_GET['orderByField']) && $_GET['orderByField'] != '') {
            $sqlData['orderByField'] = $_GET['orderByField'];
        } else {
            $sqlData['orderByField'] = '';
        }

        if (isset($_GET['orderByFieldValue']) && $_GET['orderByFieldValue'] != '') {
            $sqlData['orderByFieldValue'] = $_GET['orderByFieldValue'];
        } else {
            $sqlData['orderByFieldValue'] = '';
        }

        if (isset($_GET['searchByField']) && $_GET['searchByField'] != '') {
            $sqlData['searchByField'] = $_GET['searchByField'];
        } else {
            $sqlData['searchByField'] = '';
        }

        if (isset($_GET['searchByFieldValue']) && $_GET['searchByFieldValue'] != '') {
            $sqlData['searchByFieldValue'] = $_GET['searchByFieldValue'];
        } else {
            $sqlData['searchByFieldValue'] = '';
        }

        $sqlDataArr['listing'] = $this->admin_model->getRoadmapData($sqlData);
				
        $data['paginationHTML'] = '';
        if ($sqlDataArr['listing']->num_rows() > 0) {
            $HTML = '';
            $sqlData['perPage'] = 'pagi';
            $rowCount = $this->admin_model->getRoadmapData($sqlData);
            $rowCount = getPagination($rowCount);

            $data['paginationHTML'] = $this->getPaginationHTML($rowCount, $sqlData['selectTab']);
            foreach ($sqlDataArr['listing']->result() as $list) {
                $HTML .= '<tr class="gradeA even">';
                $HTML .= '<td>' . $list->id . '</td>';
                $HTML .= '<td>' . $list->name . '</td>';
				$HTML .= '<td>' . $list->heading . '</td>';
                $HTML .= '<td>' . $list->description . '</td>';                
                $HTML .= '<td>';
                $HTML .= '<span id=box' . $list->id . '>';
                if ($list->status == '1') {
                    $HTML .= '<a title="Active" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","0","' . $list->id . '")>' . ACTIVE_ICON . '</a>';
                } else {
                    $HTML .= '<a title="Deactive" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","1","' . $list->id . '")>' . DEACTIVE_ICON . '</a>';
                }
                $HTML .= '</span>';
                $HTML .= '&nbsp;&nbsp;';
                $HTML .= '<a title="EDIT" href="' . SITE_PATH . 'addRoadmap/' . $list->id . '" >' . EDIT_ICON . '</a>';
                $HTML .= '&nbsp;&nbsp;&nbsp;&nbsp';
                $HTML .= '<a title="Delete" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","-1","' . $list->id . '")>' . DELETE_ICON . '</a>';
                $HTML .= '</td>';
                $HTML .= '</tr>';
            }
        } else {
            $HTML = '<tr class="gradeA even"><td colspan="10" align="center">Data Not Found</td></tr>';
        }
        $data['HTML'] = $HTML;

        $data['status'] = $sqlData['status'];
        $data['orderByField'] = $sqlData['orderByField'];
        $data['orderByFieldValue'] = 'asc';
        $orderByFieldValueChange = '';

        if (isset($_GET['orderByFieldValueChange']) && $_GET['orderByFieldValueChange'] == 'yes') {
            $orderByFieldValueChange = 'yes';
            $data['orderByFieldValue'] = $sqlData['orderByFieldValue'];
        }

        $data['searchByField'] = $sqlData['searchByField'];
        $data['searchByFieldValue'] = $sqlData['searchByFieldValue'];
        $data['orderByFieldValueChange'] = $orderByFieldValueChange;
        $data['selectTab'] = $sqlData['selectTab'];
        $data['perPage'] = $sqlData1['perPage'];

        $this->load->view('roadmap', $data);
        $this->load->view('footer');
    }

    public function addRoadmap($id = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $tableName = 'roadmap';
        if ($id > 0) {
            $data['sectionName'] = 'Edit Roadmap';
        } else {
            $data['sectionName'] = 'Add Roadmap';
        }
        $form_data['id'] = $id;
        $form_data['heading'] = '';
        $form_data['description'] = '';
        $form_data['name'] = '';
        $form_data['hiddenimage'] = '';
        $form_data['status'] = '';
        if ($id > 0) {
            $result = $this->admin_model->getData($tableName, array("id" => $id));
            if ($result) {

                $form_data['heading'] = $result[0]->heading;
                $form_data['description'] = $result[0]->description;
                $form_data['name'] = $result[0]->name;
                $form_data['status'] = $result[0]->status;
            }
        }
        $data['form_data'] = $form_data;
        if ($this->input->post('action') == "Submit") {
            $data['form_data'] = $this->input->post();
            $form_data['name'] = $this->input->post('name');
            $form_data['description'] = $this->input->post('description');
            $form_data['heading'] = $this->input->post('heading');            
            $form_data['status'] = $this->input->post('status');
            $form_data['added_on'] = date("Y-m-d H:i:s");
            if ($id > 0) {
                unset($form_data['hiddenimage']);
                $this->admin_model->updateData($tableName, $form_data, array("id" => $id));
                redirect('roadmap');
            } else {
                unset($form_data['hiddenimage']);
                $id = $this->admin_model->insertData($tableName, $form_data);
                if ($id > 0) {
                    redirect('roadmap');
                }
            }
        }
        $this->load->view('addRoadmap', $data);
        $this->load->view('footer');
    }
	
	
	
	// Roadmap Galary...
	
	public function roadmap_galary($status = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $data['sectionName'] = 'Roadmap Galary';
        $tableName = 'raodmap_gallery';
        $data['thisPath'] = SITE_PATH . 'roadmap_galary/';

        if (isset($_GET['perPage']) && $_GET['perPage'] != '') {
            $sqlData['perPage'] = $_GET['perPage'];
            $sqlData1['perPage'] = $_GET['perPage'];
        } else {
            $sqlData['perPage'] = '0';
            $sqlData1['perPage'] = '0';
        }

        if (isset($_GET['status']) && $_GET['status'] != '') {
            $sqlData['status'] = $_GET['status'];
        } else {
            $sqlData['status'] = '-1';
        }

        if (isset($_GET['selectTab']) && $_GET['selectTab'] != '') {
            $sqlData['selectTab'] = $_GET['selectTab'];
        } else {
            $sqlData['selectTab'] = '0';
        }

        if (isset($_GET['orderByField']) && $_GET['orderByField'] != '') {
            $sqlData['orderByField'] = $_GET['orderByField'];
        } else {
            $sqlData['orderByField'] = '';
        }

        if (isset($_GET['orderByFieldValue']) && $_GET['orderByFieldValue'] != '') {
            $sqlData['orderByFieldValue'] = $_GET['orderByFieldValue'];
        } else {
            $sqlData['orderByFieldValue'] = '';
        }

        if (isset($_GET['searchByField']) && $_GET['searchByField'] != '') {
            $sqlData['searchByField'] = $_GET['searchByField'];
        } else {
            $sqlData['searchByField'] = '';
        }

        if (isset($_GET['searchByFieldValue']) && $_GET['searchByFieldValue'] != '') {
            $sqlData['searchByFieldValue'] = $_GET['searchByFieldValue'];
        } else {
            $sqlData['searchByFieldValue'] = '';
        }

        $sqlDataArr['listing'] = $this->admin_model->getRoadmapGalData($sqlData);
				
        $data['paginationHTML'] = '';
        if ($sqlDataArr['listing']->num_rows() > 0) {
            $HTML = '';
            $sqlData['perPage'] = 'pagi';
            $rowCount = $this->admin_model->getRoadmapGalData($sqlData);
            $rowCount = getPagination($rowCount);

            $data['paginationHTML'] = $this->getPaginationHTML($rowCount, $sqlData['selectTab']);
            foreach ($sqlDataArr['listing']->result() as $list) {
                $HTML .= '<tr class="gradeA even">';
                $HTML .= '<td>' . $list->id . '</td>';
                $HTML .= '<td>' . $list->road_id . '</td>';
                if ($list->gallery_image) {
                    $image = '<img src="' . SITE_PRODUCTS_IMAGES_PATH . $list->gallery_image . '" width="100" >';
                } else {
                    $image = '';
                }
                $HTML .= '<td>' . $image . '</td>';
                $HTML .= '<td>';
                $HTML .= '<span id=box' . $list->id . '>';
                if ($list->status == '1') {
                    $HTML .= '<a title="Active" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","0","' . $list->id . '")>' . ACTIVE_ICON . '</a>';
                } else {
                    $HTML .= '<a title="Deactive" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","1","' . $list->id . '")>' . DEACTIVE_ICON . '</a>';
                }
                $HTML .= '</span>';
                $HTML .= '&nbsp;&nbsp;';
                $HTML .= '<a title="EDIT" href="' . SITE_PATH . 'addRoadmapGalary/' . $list->id . '" >' . EDIT_ICON . '</a>';
                $HTML .= '&nbsp;&nbsp;&nbsp;&nbsp';
                $HTML .= '<a title="Delete" href="javascript:void(0)" onclick=statusChange("' . $tableName . '","-1","' . $list->id . '")>' . DELETE_ICON . '</a>';
                $HTML .= '</td>';
                $HTML .= '</tr>';
            }
        } else {
            $HTML = '<tr class="gradeA even"><td colspan="10" align="center">Data Not Found</td></tr>';
        }
        $data['HTML'] = $HTML;

        $data['status'] = $sqlData['status'];
        $data['orderByField'] = $sqlData['orderByField'];
        $data['orderByFieldValue'] = 'asc';
        $orderByFieldValueChange = '';

        if (isset($_GET['orderByFieldValueChange']) && $_GET['orderByFieldValueChange'] == 'yes') {
            $orderByFieldValueChange = 'yes';
            $data['orderByFieldValue'] = $sqlData['orderByFieldValue'];
        }

        $data['searchByField'] = $sqlData['searchByField'];
        $data['searchByFieldValue'] = $sqlData['searchByFieldValue'];
        $data['orderByFieldValueChange'] = $orderByFieldValueChange;
        $data['selectTab'] = $sqlData['selectTab'];
        $data['perPage'] = $sqlData1['perPage'];

        $this->load->view('roadmap_galary', $data);
        $this->load->view('footer');
    }

    public function addRoadmapGalary($id = '') {
        $this->validSession();
        $this->load->view('top');
        $this->load->view('sidebar');
        $tableName = 'raodmap_gallery';
		$tableName2 = 'roadmap';
        if ($id > 0) {
            $data['sectionName'] = 'Edit Raodmap Gallery';
        } else {
            $data['sectionName'] = 'Add Raodmap Gallery';
        }
        $form_data['id'] = $id;
        $form_data['road_id'] = '';		
        $form_data['gallery_image'] = '';
		$form_data['hiddenimage'] = '';
        $form_data['position'] = '';
		$form_data['status'] = '';
       
        if ($id > 0) {
            $result = $this->admin_model->getData($tableName, array("id" => $id));
            if ($result) {

                $form_data['road_id'] = $result[0]->road_id;
                $form_data['hiddenimage'] = $result[0]->gallery_image;
                $form_data['status'] = $result[0]->status;
            }
        }
		
		        
        $data['form_data'] = $form_data;
        if ($this->input->post('action') == "Submit") {
            $data['form_data'] = $this->input->post();
            $form_data['road_id'] = $this->input->post('road_id');           
            if ($_FILES['image']['name'] != '') {
                $fileTmpLoc = $_FILES['image']['tmp_name'];
                $form_data['gallery_image'] = make_valid_image_name($_FILES['image']['name']);
                $pathAndName = SERVER_PRODUCTS_IMAGES_PATH . $form_data['gallery_image'];
                if (strlen($this->input->post('hiddenimage')) > 0) {
                    unlink(SERVER_PRODUCTS_IMAGES_PATH . $this->input->post('hiddenimage'));
                }
                $transfer = move_uploaded_file($fileTmpLoc, $pathAndName);
            } else {
                $form_data['gallery_image'] = $this->input->post('hiddenimage');
            }
            $form_data['status'] = $this->input->post('status');
            $form_data['added_on'] = date("Y-m-d H:i:s");
            if ($id > 0) {
                unset($form_data['hiddenimage']);
                $this->admin_model->updateData($tableName, $form_data, array("id" => $id));
                redirect('roadmap_galary');
            } else {
                unset($form_data['hiddenimage']);
                $id = $this->admin_model->insertData($tableName, $form_data);
                if ($id > 0) {
                    redirect('roadmap_galary');
                }
            }
        }
		$this->data = new stdClass();
		$this->data->roadmap = $this->admin_model->getData($tableName2);
		$form_data['roadmap'] = $this->data;
		$data['form_data'] = $form_data;
		
        $this->load->view('addRoadmapGalary', $data);
        $this->load->view('footer');
    }
	
	
	public function export_orders($date1="",$date2=""){
		$this->validSession();
		$type="orders";
		$this->load->library("excel");
		$this->excel->setActiveSheetIndex(0);
        $fileName=$type.'_'.date('d-m-Y').'.xls';
		$data = $this->admin_model->getOrderDataExport();		
        $this->excel->stream($fileName, $data);
	}
	
	
}