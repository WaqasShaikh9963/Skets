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
/* @var $row type */
      foreach($query->result() as $row){
    
       $toolname = $row->tool_name;
       $leftpos = $row->left_pos;
       $topos = $row->top_pos;
       $height = $row->height;
       $width = $row->width;  
       $top = $topos-100;
       $left= $leftpos-134.5;
 ?>
            
<img src="<?php echo base_url();?>assets/images/<?php echo $toolname;?>.png" style="margin-left:<?php echo $left;?>px; margin-top:<?php echo $top;?>px; width:<?php echo $width;?>px; height:<?php echo $height;?>px;" />            

    <?php      
      }  
?>      
   
       
    </body>
</html>
