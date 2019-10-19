$(function(){                                  

    $('.text-center img').draggable({
        appendTo:'.whitepage',  
        helper:'clone',
        cursor: 'pointer',
        revert: "invalid"
    });

    $(".whitepage").droppable({
        accept: 'img',
        drop: function(e, ui) {
        dragEl = ui.helper.clone();
        ui.helper.remove();
			
        dragEl.addClass("dragMe");
	data = $(this).append(dragEl);                 
       
    
        $(data).selectable({});

$(document).keyup(function(e){
    if(e.keyCode == 46)
   {
     $(".ui-selected").remove();
	 
	      }
	  else{
	  
	 // alert("avcsSS");
	  
	  }
	  
	  });
 $(dragEl).dblclick(function (e) {
    if (e.shiftKey) {
        shiftClickSelectable($(this));
    } else {
        if (!$(this).hasClass("ui-selected")) {
            $(this).addClass("ui-selected").siblings().removeClass("ui-selected");
        }
   }
});
        $(data).children().resizable({
	animate:true,
        ghost: true,
        animateDuration: "slow",
        handles:'all',
        maxHeight: 550,
	maxWidth: 740,
	stop: function(event, ui) {
              // Update_Size();
        
        }
    });    //   Tools Resizable fucntion
     
    $(data).children().draggable({
        containment:'parent',
        cursor:'move'

    });    // Children Draggable Function  
 }      // Drop function         
});   //  Droppable Function        
      
      
      
      
    element = $(".whitepage");   ///////////////  Prototype Save In database 
    $(".saveindb").on('click', function () {
       el = element.html();
       prototype_name = $('#prototypename').val();
        jQuery.ajax({
        type:"POST",
        url:"/Skets/index.php/SketsController/Insert_Prototype",
        data:{data:el,prototype_name:prototype_name},    // multiple data sent using ajax
        
            success: function (data) {
             alert("Save Successfuly");
        }
      });    
                    });   //////                 Prototype Save In database
                                                      
$(".project_name").on('click',function(){   ////  Get Protoype Name when user login
       projectid = $(this).attr("id");
        var u = "/Skets/index.php/SketsController/Get_Prototypes";
    //    console.log("id: " +projectid +" u: " +u);
        jQuery.ajax({
        type:"GET",
        url:u,
        data:{project_id:projectid},    // multiple data sent using ajax
            success: function (data) {
            $(".whitepage").html(data);
            
            $(".whitepage").children().draggable({
                containment:'parent',
                cursor:'move'
            });
        $(".whitepage").children().resizable({
                
                animate:true,
        ghost: true,
        animateDuration: "slow",
        handles:'all',
        maxHeight: 550,
	maxWidth: 740
            });
        $(".whitepage").selectable({});    
            
        }
      });  
   });                          ////  Get Protoype Name when user login
   
    
    
   
   
   
$("#s_as").click(function(){   ////  Update & Save As Prototype
     update_el= $(".whitepage");
     update_prototype = update_el.html();
     //update_name = $('#update_name').attr('value');
      // alert(update_prototype);
      // var u = "/Skets/index.php/SketsController/Update_Prototypes";
        console.log("name el : " + update_el +" project_id " + projectid);
        jQuery.ajax({
        type:"POST",
        url:"/Skets/index.php/SketsController/Update_Prototypes",
        data:{update_pro:update_prototype,update_id:projectid},    
            success: function (data) {
             alert('update succesfully');
        }
      });    
   });                                  ////  Update & Save As Prototype
   
   
  $(".prototype_delete").click(function(){    ////    Delect Prototypes
     var delete_id = $(this).attr("id"); 
     //WRN_PRO_DELETE = "Are you sure you want to delete this Prototype ?";  
       //     var check = confirm(WRN_PRO_DELETE);  
    //      if(check == true){
      jQuery.ajax({
        type:"POST",
        url:"/Skets/index.php/SketsController/Delete_Prototypes",
        data:{delete_key:delete_id},    // multiple data sent using ajax
            success: function (data) {
             alert('Delete Successfuly');
        }
      });
  //}
  });            ////    Delect Prototypes
      
//var currentZoom = 1.0;
//        $('#zoomin').click(
//            function () {
//                $('.whitepage').animate({ 'zoom': currentZoom += .1 }, 'slow');
//            });
//        $('#zoomout').click(
//            function () {
//                $('.whitepage').animate({ 'zoom': currentZoom -= .1 }, 'slow');
//            });
//        $('#reset').click(
//            function () {
//                currentZoom = 1.0;
//                $('.whitepage').animate({ 'zoom': 1 }, 'slow');
//            });
//    

$("#dialog").dialog({
            autoOpen: false,
            title: "Skets Tutorial",
            width: 740,
            height: 460,
          
            show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
        });
        $("#tutorial").click(function () {
            $('#dialog').dialog('open');
        });
    
});    //   main function

$("#print").click(function(){     //    Print Prototype
            window.print();
        
        });                    //    Print Prototype

