$(document).ready(function() {
    if($("#PersonaTipoDePersona").val() == 1){
      hide_natural();
    }else
      if($("#PersonaTipoDePersona").val() == 0){
        hide_juridica();
      }
    $("#PersonaTipoDePersona").change(function(){
      if($(this).val() == 1){
       hide_natural();
      }
      else
        if($(this).val() == 0){
         hide_juridica();
        }
    });

    $("#ClienteEspecializacionId").change(function(){
       $.ajax({
              type: 'GET',
              data: {id: $(this).val()},
              url: '/clientes/change_especializacion',
              success: function(data){
                  if($("#ClienteEspecializacionId2").length > 0){
                    $("#ClienteEspecializacionId2").html(data);
                  }
                  else{
                    $("#ClienteEspecializacionId").after(data);
                  }
                  
                  $("#ClienteEspecializacionId").attr('name', '');
              }
            });
    });

    
    $("#ClientePersonaId").change(function(){
    	alert($(this).val());
        $.ajax({
               type: 'GET',
               data: {id: $(this).val(),'loadPersona':'true'}, 
//               url: '/js/clientes/jsCalls.php',
               url: '/clientes/getCliente',
               error: function(xhr, status, error) { alert('Error: '+ xhr.status+ ' - '+ error); },
               success: function(response) {alert('ok succes'); $('#factura_a_nombre_de').html(response); }
//               success: function(data){
//            	   alert('ok');
//                   if($("#factura_a_nombre_de").length > 0){
//                     $("#factura_a_nombre_de").html(data);
//                   }
//                   else{
//                     $("#factura_a_nombre_de").after(data);
//                   }
//                   
//                   $("#factura_a_nombre_de").attr('name', '');
//               }
             });
     });

  });
  function hide_natural(){
     $(".natural-bloque").hide();
     $(".juridica-bloque").show();
  }
  function hide_juridica(){
     $(".juridica-bloque").hide();
     $(".natural-bloque").show();
  }