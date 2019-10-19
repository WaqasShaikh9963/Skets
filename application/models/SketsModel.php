<?php

class SketsModel extends CI_Model {
    //put your code here
    public function Register_User($username,$email,$password){
        $data = array(
             'UserName' =>$username,
             'UserEmail' =>$email,
             'UserPass' =>$password
             );
         $this->db->insert('user',$data); 
//         $insert_id = $this->db->insert_id();   // get last insert id 
//         $this->db->where('id',$insert_id);
//     return $this->db->get("user");    
    }
    
    public function Get_User_For_Login(){  // Get_User_For_Login check    
         return  $this->db->get("user");
    }  //   Get_User_For_Login
   
    public function Insert_Prototype($data,$prototype_name,$user_id){   
        $this->db->set('prototype',$data);
        $this->db->set('User_id',$user_id);
        $this->db->set('prototype_name',$prototype_name);
        $this->db->insert('userprototype');
     } //   insert_prototypes
        
      public function Get_Name($user_id){
        $this->db->where('User_id',$user_id);
        return $query = $this->db->get("userprototype");
        
    }   //  Get_Prototypes
    
    public function Get_Prototypes($prototype_id){
  
        $this->db->select('prototype');
        $this->db->where('prototype_id', $prototype_id);
        $q = $this->db->get('userprototype');
        $data = $q->result_array();
        return $data[0]['prototype'];
        
    }     
    
    public function Update_Prototypes($update_id,$update_pro){
        
    $this->db->set('prototype',$update_pro);   
    $this->db->where('prototype_id',$update_id);  
    $this->db->update('userprototype');
        
    }
    
    public function Delete_Prototypes($delete_id){
        
    $this->db->where('prototype_id',$delete_id);  
    $this->db->delete('userprototype');
        
    }
}   //  classs 
