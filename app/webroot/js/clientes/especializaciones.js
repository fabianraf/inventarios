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
                    $("#ClienteEspecializacionId2").parent('div').html(data);
                  }
                  else{
                    $("#ClienteEspecializacionId").parent('div').after(data);
                  }
                  
                  $("#ClienteEspecializacionId").attr('name', '');
              }
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