<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $email = $this->session->userdata('email');
        $password = $this->session->userdata('password');
        
        foreach ($query->result() as $user){
        
             $user_id   =  $user->id; // access attributes
             $userName  =  $user->UserName;
             $userEmail =  $user->UserEmail;
             $userPass  =  $user->UserPass;
            
             if($email == $userEmail && $password == $userPass){
             
                 $session = array(
                   'loginsucces' =>'loginsucces',
                   'user_id' => $user_id,
                   'user_name' => $userName,
                    'user_id_project' => $user_id 
               );
                 
                 $this->session->set_userdata($session);
                 
             }
             elseif($email != $userEmail || $password != $userPass){
                $session = array(
                   'loginfail' =>'loginfail'
               );
                 $this->session->set_userdata($session);
                 
             }
             
          }
        
        ?>
    </body>
</html>
