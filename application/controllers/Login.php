<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	

	public function index()
	{

		$get_data = $this->input->get(); //-- گرفتن داده های گت شده
			$data=array();	
		if($get_data){
			if(isset($get_data['logout']) && $get_data['logout']==1){
				//remove login session
				$this->session->unset_userdata('username');  
				redirect('http://'.base_url() . 'login');  
			}
			
		}


		
		$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				
				if(isset($post_data['send_msg'])){
					$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
					date_default_timezone_set("Asia/tehran");
					$data_update['date']=jdate('Y/m/d')." - ".date("h:i");
					$data_update['ip']= $_SERVER['REMOTE_ADDR'];
					$this->ShowDB_model->insert_msg($data_update); //-- افزودن به دیتابیس
					
					$data['msg']="پیام ارسال شد";
				}

	$this->load->view('pages/login',$data);
		
		
		
	}

	function login_validation()  
	{  
		 $this->load->library('form_validation');  
		 $this->form_validation->set_rules('username', 'Username', 'required');  
		 $this->form_validation->set_rules('password', 'Password', 'required');  
		 if($this->form_validation->run())  
		 {  
			  //true  
			  $username = $this->input->post('username');  
			  $password = $this->input->post('password'); 

			  //model function 
			  if( ($this->User_model->can_login($username, $password)) != false  )
			  {  
				   $session_data = array(  
						'username'     =>     $username 
				   );  
				   $this->session->set_userdata($session_data);  //---ست کردن سشن

				   $data=array ('last_login'=> jdate('H:i:s ,Y/n/j')); // آخرین ورود
				   
				   $this->User_model->update_user_setting($username,$data);
				   redirect('http://'.base_url() . 'home/page/home?var=3');  
			  }  
			  else  
			  {  
				   $this->session->set_flashdata('error', 'نام کاربری یا رمز اشتباه است');  
				   redirect('http://'.base_url() . 'login');  
			  }  
		 }  
		 else  
		 {  
			  //false  
			  $this->index();  
		 }  
	}  
	


}
