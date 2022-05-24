<?php

class  User_model extends CI_Model{
function __construct()
{
    parent::__construct();
}
// ------ گرفتن کاربر با یوزرنیم
function current_user($username){
    $query = $this->db->query("SELECT * FROM users WHERE username = '".$username."'");
    return $query->result_array();
}

// ------ گرفتن کاربر با آی دی
function current_user_id($id){
    $query = $this->db->query("SELECT * FROM users WHERE id = '".$id."'");
    return $query->result_array();
}
//دسترسی های یوزر مورد نظر
function get_privlege($id){
    $query = $this->db->query("SELECT * FROM privileges WHERE user_id = $id");
    return $query->result_array();
}
//گرفتن تنظیمات یوزر
function get_user_setting($username){
    $query = $this->db->query("SELECT * FROM user_setting WHERE user = '".$username."'");
    return $query->result_array();
}

//آپدیت تنظیمات یوزر
function update_user_setting($username,$data){
    $this->db->set($data);
    $this->db->where('user', $username);
    $result = $this->db->update('user_setting');
    if($result){return true;} else {return false;}
}


//--- آپدیت یوزر
function update_user($username,$data){
    $this->db->set($data);
    $this->db->where('username', $username);
    $result = $this->db->update('users');
    if($result){return true;} else {return false;}
}




//-----------------------------------------------------------------
function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return $query->result_array();
           }  
           else  
           {  
                return false;       
           }  
      }

//--------- admin ---------- data---------
function get_data_msgs(){
    $query = $this->db->query("SELECT * FROM msg ORDER BY id DESC");
    return $query->result_array();
}
function get_data_users(){
    $query = $this->db->query("SELECT * FROM users INNER JOIN user_setting ON users.username = user_setting.user");
    return $query->result_array();
}
function get_data_privilege(){
    $query = $this->db->query("SELECT * FROM privileges");
    return $query->result_array();
}
function get_data_setting(){
    //----setting from db-----------
}





}