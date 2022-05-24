<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		redirect('http://'.site_url('home/page/home'));
		
	}

	public function page($page='home')
	{
		$username=$this->session->userdata('username');
		if($username == '')  
		{
			
			redirect('http://'.base_url() . 'login');  
		} else {
			$data['user']=$this->User_model->current_user($username);
			$data['user_setting']=$this->User_model->get_user_setting($username);
			$data['privlege']=$this->User_model->get_privlege($data['user'][0]['id']); 
			
		}
		if ($data['user'][0]["state"] == 0){
			$this->session->unset_userdata('username'); 
			$this->session->set_flashdata('error', 'کاربر غیر فعال است');
			redirect('http://'.base_url() . 'login');  
		}

		
		
		$data['date_shamsi'] =jdate('Y/m/d','','','','en');

		$data['page']=$page;
	

		///// -----------     بک آپ گیری --------------///////
		$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				if(isset($post_data['backup_now'])){
					$this->ShowDB_model->db_backup(); // ---------- بک آپ گیری
					redirect('http://'.site_url('home/page/home?var=40'));
				}
		////----------------------------------/////
		

		switch ($page){
			case 'admin' :
				$pag_name='admin'; //---صفحه ادمین   ---
				$data['data_msgs']=$this->User_model->get_data_msgs();
				$data['data_users']=$this->User_model->get_data_users();
				$data['data_privilege']=$this->User_model->get_data_privilege();
				$data['back_file']=$this->ShowDB_model->get_last_dbbackup();
				
				
				
			
			break;
			case 'home' :
				$pag_name='home'; //---صفحه خانه   ---
				$data['taghvim']=$this->ShowDB_model->get_taghvim_id(jdate('F'),jdate('j','','','','en')); //-گرفتن مناسبت از دیتا بیس
			
			break;
			case 'helpdesk' :
				$pag_name='helpdesk'; //---صفحه پشتیبانی   ---
				$data['all_data']= $this->ShowDB_model->get_all_helpdesk();

				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				if($post_data){
					$result= $this->ShowDB_model->insert_helpdesk($post_data); //-- افزودن به دیتابیس
					redirect('http://'.site_url('home/page/helpdesk?var='.$result));
				}
			
			break;
			case 1 :
				$pag_name='afrad'; //---نام صفحه ---


				$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM afrad")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;

				$data['all_data']= $this->ShowDB_model->get_all_afrad($get_data_c); //--- خواندن داده ها از دیتابیس


				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				if($post_data){
					
					$last_row=$this->db->query("SELECT * FROM afrad ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['name']==$post_data['name'] && $last_row[0]['vorod']==$post_data['vorod']){
						redirect('http://'.site_url('home/page/1?var=0')); //اگر تکراری بود خطا بدهد
					}else{
						$result= $this->ShowDB_model->insert_afrad($post_data); //-- افزودن به دیتابیس
						redirect('http://'.site_url('home/page/1?var='.$result));
					}
				}

			
			break;
			case 2 :
				$pag_name='modiran';


				$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM modiran")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;
				$data['all_data']= $this->ShowDB_model->get_all_modiran($get_data_c); //--- خواندن داده ها از دیتابیس


				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				$result=0;
				if($post_data){

					$last_row=$this->db->query("SELECT * FROM modiran ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['name']==$post_data['name'] && $last_row[0]['vorod']==$post_data['vorod']){
						redirect('http://'.site_url('home/page/2?var=0'));
					}else{
						$result= $this->ShowDB_model->insert_modiran($post_data); //-- افزودن به دیتابیس
						redirect('http://'.site_url('home/page/2?var='.$result));
					}

				}

				

			break;
			case 3 :
			$pag_name='khodro';
			
			$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM khodro")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;
				$data['all_data']= $this->ShowDB_model->get_all_khodro($get_data_c); //--- خواندن داده ها از دیتابیس

			
			$post_data = $this->input->post(); //-- گرفتن داده های پست شده
			$result=0;
				if($post_data){

					$last_row=$this->db->query("SELECT * FROM khodro ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['name']==$post_data['name'] && $last_row[0]['vorod']==$post_data['vorod']){
						redirect('http://'.site_url('home/page/3?var=0')); //اگر تکراری بود خطا بدهد
					}else{
						$result= $this->ShowDB_model->insert_khodro($post_data); //-- افزودن به دیتابیس
						redirect('http://'.site_url('home/page/3?var='.$result));
					}
					
				}

				

			break;
			case 4 :
			$pag_name='amval';
			
			$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM amval")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;
				$data['all_data']= $this->ShowDB_model->get_all_amval($get_data_c); //--- خواندن داده ها از دیتابیس

			
			$post_data = $this->input->post(); //-- گرفتن داده های پست شده
			$result=0;
				if($post_data){
					$last_row=$this->db->query("SELECT * FROM amval ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['type']==$post_data['type'] && $last_row[0]['time']==$post_data['time']){
						redirect('http://'.site_url('home/page/4?var=0')); //اگر تکراری بود خطا بدهد
					}else{
						$result= $this->ShowDB_model->insert_amval($post_data); //-- افزودن به دیتابیس
						redirect('http://'.site_url('home/page/4?var='.$result));
					}

				}
			break;
			case 5 :
				$pag_name='about';

				//------ گرفتن پیام های کاربر جاری
				$data['user_msg']=$this->ShowDB_model->get_msg_user($username);




				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				
				if($post_data){
					date_default_timezone_set("Asia/tehran");
					$post_data['date']=$data['date_shamsi']." - ".date("h:i");
					$post_data['ip']= $_SERVER['REMOTE_ADDR'];
					$post_data['user']=$username;
					$this->ShowDB_model->insert_msg($post_data); //-- افزودن به دیتابیس
					redirect('http://'.site_url('home/page/5?var=4'));
				}
			break;
			case 6 :
				$pag_name='setting';
				//echo $username;
				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				if(isset($post_data['save_pass'])){
					
					$result= $this->User_model->update_user($username,array('password' => $post_data['pass1'])); //-- افزودن به دیتابیس
					if($result){redirect('http://'.site_url('home/page/6?var=5'));
					}else {echo 'خطا در عملیات';}
				}
				//------- upload pic ---------------
				$data['error']='';

				$config['upload_path']          = './assets/pics/avatar';
                $config['allowed_types']        = 'jpg';
				$config['file_name'] =$username.'-'.rand(1000,9000);
				$config['overwrite']=true;

               //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;
				if(isset($post_data['save_pic'])){
					
					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('userfile'))
					{
							$data['error'] =  "خطا در ارسال فایل";
							
					}
					else
					{
						$data['error']  = 'فایل با موفقیت آپلود شد';

						$result= $this->User_model->update_user($username,array('avatar' => $config['file_name'].'.jpg' )); //-- افزودن به دیتابیس
					if($result){redirect('http://'.site_url('home/page/6?var=7'));
					}else {echo 'خطا در عملیات';}
					}
				}
				//-------------------------------
				

				
			break;
			case 7 :
				$pag_name='aghlam'; //---نام صفحه ---


				$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM aghlam")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;

				$data['all_data']= $this->ShowDB_model->get_all_aghlam($get_data_c); //--- خواندن داده ها از دیتابیس


				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				if($post_data){
					$last_row=$this->db->query("SELECT * FROM aghlam ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['name']==$post_data['name'] && $last_row[0]['vorod']==$post_data['vorod']){
						redirect('http://'.site_url('home/page/7?var=0')); //اگر تکراری بود خطا بدهد
					}else{
						$result=$this->ShowDB_model->insert_aghlam($post_data); //-- افزودن به دیتابیس
						redirect('http://'.site_url('home/page/7?var='.$result));
					}

				}

			
			break;
			case 8 :
				$pag_name='khozestan'; //---نام صفحه ---


				$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM khozestan")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;

				$data['all_data']= $this->ShowDB_model->get_all_khozestan($get_data_c); //--- خواندن داده ها از دیتابیس


				$post_data = $this->input->post(); //-- گرفتن داده های پست شده
				if($post_data){
					$last_row=$this->db->query("SELECT * FROM khozestan ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['name']==$post_data['name'] && $last_row[0]['vorod']==$post_data['vorod']){
						redirect('http://'.site_url('home/page/8?var=0')); //اگر تکراری بود خطا بدهد
					}else{
						$result= $this->ShowDB_model->insert_khozestan($post_data); //-- افزودن به دیتابیس
					redirect('http://'.site_url('home/page/8?var='.$result));
					}
					
				}

			
			break;
			case 9:

				$pag_name='khodro_pey';
			
			$data['count_tbl']=$this->db->query(" SELECT COUNT(id) FROM khodro_pey")->result_array(); //--کل تعداد ردیف داده ها
				$get_data_c = $this->input->get('p'); //--- گرفتن داده از گت تعداد 
				if (!isset($get_data_c)){$get_data_c=50;}
				$data['page_c']=$get_data_c;
				$data['all_data']= $this->ShowDB_model->get_all_khodro_pey($get_data_c); //--- خواندن داده ها از دیتابیس

			
			$post_data = $this->input->post(); //-- گرفتن داده های پست شده
			$result=0;
				if($post_data){
					$last_row=$this->db->query("SELECT * FROM khodro_pey ORDER BY ID DESC LIMIT 1")->result_array(); //گرفتن آخرین داده در دیتابیس
					if ($last_row[0]['date']==$post_data['date'] && $last_row[0]['name']==$post_data['name'] && $last_row[0]['vorod']==$post_data['vorod']){
						redirect('http://'.site_url('home/page/9?var=0')); //اگر تکراری بود خطا بدهد
					}else{
						$result= $this->ShowDB_model->insert_khodro_pey($post_data); //-- افزودن به دیتابیس
						redirect('http://'.site_url('home/page/9?var='.$result));
					}

					
				}


				break;


		}

		$data['msg']=array(
			1=>"با موفقیت ثبت شد" , 
			0=> "خطا در ثبت",
			3=>"خوش آمدید",
			4=> "پیام شما ارسال شد", 
			5=>"رمز شما با موفقیت تغییر یافت" ,
			6=> "پشتیبان گیری با موفقیت انجام شد",
			7=>"عکس پروفایل شما با موفقیت تغییر یافت" 
		);

		$get_res = $this->input->get('var'); //--- گرفتن داده از گت
		if(isset($get_res)){
			if($get_res=='1') {$data['post_ok']=1; } //-- فرستادن پیام به صفحه
		elseif ($get_res=='0') { $data['post_ok']=0; }
		elseif ($get_res=='3') { $data['post_ok']=3; }
		elseif ($get_res=='4') { $data['post_ok']=4; }
		elseif ($get_res=='5') { $data['post_ok']=5; }
		elseif ($get_res=='7') { $data['post_ok']=7; }
		elseif ($get_res=='40') { $data['post_ok']=40; }
		}

		$this->load->view('template/header',$data);
		$this->load->view('template/menu');
		$this->load->view('pages/'.$pag_name);
		$this->load->view('template/footer');
	}

	public function edit(){
		$username=$this->session->userdata('username');
		if($username == '')  
		{
			redirect('http://'.base_url() . 'login');  
		} else {
			$data['user']=$this->User_model->current_user($username);
			$data['user_setting']=$this->User_model->get_user_setting($username);
			$data['privlege']=$this->User_model->get_privlege($data['user'][0]['id']); 
		}


		$get_data = $this->input->get(); //--- گرفتن ردیف از دیتا بیس با شماره صفحه و آی دی از گت  
		$data['p']=$get_data['p'];
		$data['id']=$get_data['id'];
		if(isset($get_data['tab'])){$data['tab']= $get_data['tab'];}
		
		

		if($get_data['p']==1){$data['data']= $this->ShowDB_model->get_afrad_id($data['id']);}
		if($get_data['p']==2){$data['data']= $this->ShowDB_model->get_modiran_id($data['id']);}
		if($get_data['p']==3){$data['data']= $this->ShowDB_model->get_khodro_id($data['id']);}
		if($get_data['p']==4){$data['data']= $this->ShowDB_model->get_amval_id($data['id']);}
		if($get_data['p']==7){$data['data']= $this->ShowDB_model->get_aghlam_id($data['id']);}
		if($get_data['p']==8){$data['data']= $this->ShowDB_model->get_khozestan_id($data['id']);}
		if($get_data['p']==9){$data['data']= $this->ShowDB_model->get_khodro_pey_id($data['id']);}

		if($get_data['p']=='admin' && $get_data['tab']=='msg'){$data['data']= $this->ShowDB_model->get_msg_id($data['id']);}
		if($get_data['p']=='admin' && $get_data['tab']=='user'){$data['data']= $this->User_model->current_user_id($data['id']);}
		if($get_data['p']=='helpdesk'){$data['data']= $this->ShowDB_model->get_helpdesk_id($data['id']);}
		//------------------
		
		$post_data = $this->input->post(); //-- گرفتن داده های پست شده
		$result=0;

		if ( isset($post_data['save_p1'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_afrad($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p2'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_modiran($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p3'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_khodro($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p4'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_amval($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p7'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_aghlam($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p8'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_khozestan($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p9'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_khodro_pey($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}
		

		if ( isset($post_data['save_p_admin_msg'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result=$this->ShowDB_model->updat_msg($data_update, $data['id']); //آپدیت
			redirect('http://'.site_url('home/edit?p='.$data["p"].'&tab=msg&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p_admin_user'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result= $this->User_model->update_user( $data['data'][0]['username'],$data_update); //آپدیت

			redirect('http://'.site_url('home/edit?p='.$data["p"].'&tab=user&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p_admin_prev'] )){ 
			//$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			//$result=$result= $this->User_model->update_user( $data['data'][0]['username'],$data_update); //آپدیت

			//redirect('http://'.site_url('home/edit?p='.$data["p"].'&tab=user&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p_admin_setting'] )){ 
			//$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			//$result=$result= $this->User_model->update_user( $data['data'][0]['username'],$data_update); //آپدیت

			//redirect('http://'.site_url('home/edit?p='.$data["p"].'&tab=user&id='.$data["id"].'&cl=1&var='.$result));
		}
		if ( isset($post_data['save_p_helpdesk'] )){ 
			$data_update=array_slice($post_data,0,count($post_data)-1,true); //حذف آیتم آخری از دیتا پست شده
			$result= $this->ShowDB_model->update_helpdesk($data_update, $data['id']); //آپدیت

			redirect('http://'.site_url('home/edit?p='.$data["p"].'&id='.$data["id"].'&cl=1&var='.$result));
		}




		

		$data['msg']=array(
			1=>"با موفقیت آپدیت شد" ,
			0=> "خطا در آپدیت");

		$get_res = $this->input->get('var'); //---  گرفتن داده از گت برای نمایش پیام
		if(isset($get_res)){
			if($get_res=='1') {$data['post_ok']=1; $data['close']=1; } //--  فرستادن پیام 1 به صفحه و پیام بستن
		elseif ($get_res=='0') { $data['post_ok']=0; }
		}


		$this->load->view('template/header',$data);
		$this->load->view('pages/edit');
		$this->load->view('template/footer');
	}
	

}
