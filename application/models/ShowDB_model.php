<?php

class  ShowDB_model extends CI_Model{
function __construct()
{
    parent::__construct();
}


//---------- گرفتن کلی اطلاعات از دیتابیس -----------
function get_all_afrad($p){
  $query = $this->db->query("SELECT * FROM afrad  ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}
function get_all_modiran($p){
    $query = $this->db->query("SELECT * FROM modiran ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}
function get_all_khodro($p){
    $query = $this->db->query("SELECT * FROM khodro ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}
function get_all_amval($p){
    $query = $this->db->query("SELECT * FROM amval ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}
function get_all_aghlam($p){
    $query = $this->db->query("SELECT * FROM aghlam ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}
function get_all_khozestan($p){
    $query = $this->db->query("SELECT * FROM khozestan ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}
function get_all_khodro_pey($p){
    $query = $this->db->query("SELECT * FROM khodro_pey ORDER BY id DESC LIMIT $p");
    return $query->result_array();
}





//---------- گرفتن اطلاعات با آی دی از دیتابیس -----------
function get_afrad_id($id){
    $query = $this->db->query("SELECT * FROM afrad  WHERE id=$id");
      return $query->result_array();
  }
  function get_modiran_id($id){
    $query = $this->db->query("SELECT * FROM modiran  WHERE id=$id");
      return $query->result_array();
  }
  function get_khodro_id($id){
    $query = $this->db->query("SELECT * FROM khodro  WHERE id=$id");
      return $query->result_array();
  }
  function get_amval_id($id){
    $query = $this->db->query("SELECT * FROM amval  WHERE id=$id");
      return $query->result_array();
  }
  function get_aghlam_id($id){
    $query = $this->db->query("SELECT * FROM aghlam  WHERE id=$id");
      return $query->result_array();
  }
  function get_khozestan_id($id){
    $query = $this->db->query("SELECT * FROM khozestan  WHERE id=$id");
      return $query->result_array();
  }
  function get_khodro_pey_id($id){
    $query = $this->db->query("SELECT * FROM khodro_pey  WHERE id=$id");
      return $query->result_array();
  }

//------ تقویم مناسبت ها
function get_taghvim_id($moon,$day){
    $query = $this->db->query("SELECT * FROM  taghvim1401  WHERE moon='".$moon."' AND date= ".$day);
     return $query->result_array();
  }







//---------- ذخیره اطلاعات در دیتابیس -----------
function insert_afrad($data){
    $query = "INSERT INTO afrad (date, name, code_personeli, vorod, khoroj, barg_morakhasi, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['name']."','".$data['code_personeli']."','".$data['vorod']."','".$data['khoroj']."','".$data['barg_morakhasi']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}

}
function insert_modiran($data){
    $query = "INSERT INTO modiran (date, name, vorod, khoroj, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['name']."','".$data['vorod']."','".$data['khoroj']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}
   
}

function insert_khodro($data){
    $query = "INSERT INTO khodro (date, name, code_mashin, vorod, khoroj, sharh, vazn, vahed, sender, reciver, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['name']."','".$data['code_mashin']."','".$data['vorod']."','".$data['khoroj']."','".$data['sharh']."','".$data['vazn']."','".$data['vahed']."','".$data['sender']."','".$data['reciver']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}

   
}
function insert_amval($data){
    $query = "INSERT INTO amval (date, type, count, time, sharh, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['type']."','".$data['count']."','".$data['time']."','".$data['sharh']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}
  
}
function insert_aghlam($data){
    $query = "INSERT INTO aghlam (date, name, code_mashin, vorod, khoroj, sharh, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['name']."','".$data['code_mashin']."','".$data['vorod']."','".$data['khoroj']."','".$data['sharh']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}

}
function insert_khozestan($data){
    $query = "INSERT INTO khozestan (date, name, code_mashin, vorod, khoroj, sharh, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['name']."','".$data['code_mashin']."','".$data['vorod']."','".$data['khoroj']."','".$data['sharh']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}

}

function insert_khodro_pey($data){
    $query = "INSERT INTO khodro_pey (date, name, code_mashin, vorod, khoroj, sharh, vazn, vahed, sender, reciver, code_negahban, tozihat)VALUES ('".$data['date']."','".$data['name']."','".$data['code_mashin']."','".$data['vorod']."','".$data['khoroj']."','".$data['sharh']."','".$data['vazn']."','".$data['vahed']."','".$data['sender']."','".$data['reciver']."','".$data['code_negahban']."','".$data['tozihat']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}

   
}


//--ذخیره پیام  کاربر -----
function insert_msg($data){
    $this->db->set($data);
    
    $result = $this->db->insert('msg');
    if($result){return true;} else {return false;}

}


//--گرفتن پیام های  کاربر -----
function get_msg_user($username){
    $query = $this->db->query("SELECT * FROM msg WHERE user='".$username."' ORDER BY id DESC " );
    return $query->result_array();
}
//----------
//--گرفتن پیام با ای دی-----
function get_msg_id($id){
    $query = $this->db->query("SELECT * FROM msg WHERE id='".$id."'" );
    return $query->result_array();
}
//---------آپدیت پاسخ پیام
function updat_msg($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('msg');
    if($result){return true;} else {return false;}
}




//---------- آپدیت اطلاعات با آی دی در دیتابیس -----------

function updat_afrad($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('afrad');
    if($result){return true;} else {return false;}
}
function updat_modiran($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('modiran');
    if($result){return true;} else {return false;}
}
function updat_khodro($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('khodro');
    if($result){return true;} else {return false;}
}
function updat_amval($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('amval');
    if($result){return true;} else {return false;}
}
function updat_aghlam($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('aghlam');
    if($result){return true;} else {return false;}
}
function updat_khozestan($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('khozestan');
    if($result){return true;} else {return false;}
}
function updat_khodro_pey($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('khodro_pey');
    if($result){return true;} else {return false;}
}

//----- helpdesk -----------

function get_all_helpdesk($p=50){

    //$query = $this->db->query("SELECT * FROM helpdesk ORDER BY id DESC LIMIT $p");
    $query = $this->db->query("SELECT * FROM helpdesk ORDER BY id DESC");
    return $query->result_array();
}
function get_helpdesk_id($id){
    $query = $this->db->query("SELECT * FROM helpdesk  WHERE id=$id");
      return $query->result_array();
  }
function insert_helpdesk($data){
    $query = "INSERT INTO helpdesk (date, name, famili, gesmat, zarorat, title, matn)VALUES ('".$data['date']."','".$data['name']."','".$data['famili']."','".$data['gesmat']."','".$data['zarorat']."','".$data['title']."','".$data['matn']."')";

    $result = $this->db->query( $query);
    if($result){return true;} else {return false;}
}
function update_helpdesk($data , $id){
    $this->db->set($data);
    $this->db->where('id', $id);
    $result = $this->db->update('helpdesk');

   
    if($result){return true;} else {return false;}
}





//--------------backup all db----------------

 function get_last_dbbackup(){
        $query = $this->db->query("SELECT option_value FROM app_setting  WHERE option_name='last_backup'");
        return $query->result_array();


    }

    function db_backup(){
        $this->load->dbutil();
        $prefs = array(     
            'format'      => 'zip',             
            'filename'    => 'my_db_backup.sql'
            );

            $backup = $this->dbutil->backup($prefs); 
            //$db_name = "backup_on_" . date("d_m_Y_h_i_s_a") . ".zip";
            $db_name = "backup_on_" . jdate('Y_m_d__H_i','','','','en') . ".zip";
            $save = 'dbbackup/'.$db_name;
            
            $this->load->helper('file');
            if ( ! write_file($save, $backup))
            {
                redirect('http://'.site_url('home/page/admin?var=2'));
            }
            else
            {
                $this->db->set(array('option_value' => $db_name));
                $this->db->where('option_name', 'last_backup');
                $this->db->update('app_setting');
               
            }
                        
    }

}