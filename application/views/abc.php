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
        <h1>adsfasdf</h1>
        <?php
        print_r($data);
        foreach ($data->result() as $row) { 
            
            echo $row->prototype."<br>";
            echo $row->prototype_name;
            
            
        }
        // put your code here
        ?>
    </body>
</html>
