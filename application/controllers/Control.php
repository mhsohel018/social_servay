<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Rest_model');
		
	}
	public function index()
	{
		if(isset($_SESSION['userID'])){
			redirect(base_url('Control/dashboard'));
		}else{
			$this->load->view('admin/index');
		}
	}
	public function login(){
		$data=$this->input->post();
		$data['status']='active';
		$d=$this->Rest_model->SelectData_1('users','*',$data);
		if (!empty($d)) {
			$this->session->set_userdata('userID',$d->id);
			$this->session->set_userdata('userName',$d->name);
			$this->session->set_userdata('role',$d->role);
			redirect(base_url().'Control/dashboard','refresh');
		}else{
			$this->session->set_flashdata('error','Invalid email or password !');
			redirect(base_url().'Control','refresh');
		}
	}

	public function dashboard()
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$this->session->set_userdata('manu','dashboard');
			$_SESSION['menu']='dashboard';
			$this->session->set_userdata('admin_name',$_SESSION['userName']);
			$this->load->view('admin/dashboard');
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function admin_list($id=NULL){
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$this->session->set_userdata('menu','admin');
			if(isset($id)){
				$data['edit'] = $this->Rest_model->SelectData_1('users', '*', array('id'=>$id));
			}
			$data['adm'] = $this->Rest_model->SelectDataOrder('users', '*', array('role!='=>'developer'),'id','desc');
			$data['module'] = $this->Rest_model->SelectDataOrder('module', '*', '','id','asc');
			$this->load->view('admin/admin_list', $data);
			
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function add_admin(){
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['status'] = $this->input->post('status');
			$permission = $this->input->post('permission');

			$id = $this->input->post('id');
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|mp4';
			$config['encrypt_name'] = TRUE;
			$config['max_size'] = 100000000;
			$config['max_width'] = 10240000;
			$config['max_height'] = 7680000;
			$this->load->library('upload', $config);

			$this->load->library('image_lib');
			$config_1['image_library'] = 'gd2';
			$config_1['create_thumb'] = FALSE;
			$config_1['maintain_ratio'] = FALSE;
			$config_1['width']         = 150;
			$config_1['height']       = 150;

			if (!$this->upload->do_upload('photo')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data2 = array('upload_data' => $this->upload->data());
				$data['photo'] = $data2['upload_data']['file_name'];
				$config_1['source_image'] = 'uploads/'.$data2['upload_data']['file_name'];
				$this->image_lib->initialize($config_1); 
				$this->image_lib->resize();
			}
			if(isset($id)){
                                $this->Rest_model->DeleteData('user_permission',array('userID'=>$id));
                                foreach($permission as $p=>$ddd){
                                        $this->Rest_model->SaveData('user_permission',array('moduleID'=>$ddd,'userID'=>$id)); 
                                }
				$this->Rest_model->UpdateData('users', $data,array('id'=>$id));
			}else{
				$this->Rest_model->SaveData('users', $data);
                                $id=$this->db->insert_id();
                                foreach($permission as $p=>$ddd){
                                        $this->Rest_model->SaveData('user_permission',array('moduleID'=>$ddd,'userID'=>$id)); 
                                }
			}
			redirect(base_url().'Control/admin_list', 'refresh');
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function delete_admin($id){
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$this->Rest_model->DeleteData('users', array('id'=>$id));
			redirect(base_url().'Control/admin_list', 'refresh');
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function change_status($id){
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$d=$this->Rest_model->SelectData_1('users','*', array('id'=>$id));
			if($d->status=='active'){
				$data['status']='inactive';
			}else{
				$data['status']='active';
			}
			$this->Rest_model->UpdateData('users',$data,array('id'=>$id));
			redirect(base_url().'Control/admin_list', 'refresh');
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	
	public function signout(){
		session_destroy();
		redirect(base_url().'Control','refresh');
	}
	public function home_contents($id=NULL)
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$_SESSION['menu']='home';
			$data['info']=$this->Rest_model->SelectData_1('homepage','*',array('id'=>1));
			$this->load->view('admin/home_contents',$data);
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function save_home_content()
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$data=$this->input->post();

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['encrypt_name'] = TRUE;
			$config['max_size'] = 100000000;
			$config['max_width'] = 10240000;
			$config['max_height'] = 7680000;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('photo')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data2 = array('upload_data' => $this->upload->data());
				$data['photo'] = $data2['upload_data']['file_name'];
			}

			$this->Rest_model->UpdateData('homepage',$data,array('id'=>$data['id']));
			$this->session->set_flashdata('msg','Data has been updaetd successfully!');
			redirect(base_url().'Control/home_contents', 'refresh');
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function home_seo($id=NULL)
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$_SESSION['menu']='home';
			$data['info']=$this->Rest_model->SelectData_1('homepage','*',array('id'=>1));
			$this->load->view('admin/home_seo',$data);
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	public function save_home_seo()
	{
		$userID = $this->session->userdata('userID');
		if (isset($userID)) {
			$data=$this->input->post();

			$this->Rest_model->UpdateData('homepage',$data,array('id'=>$data['id']));
			$this->session->set_flashdata('msg','Data has been updaetd successfully!');
			redirect(base_url().'Control/home_seo', 'refresh');
		}else{
			redirect(base_url().'Control', 'refresh');
		}
	}
	
}
