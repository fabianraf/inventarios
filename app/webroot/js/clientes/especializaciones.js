$(document).ready(function() {
    if($("#PersonaTipoDePersona").val() == 1){
      hide_natural();
      $("#PersonaCelular").parent('div').attr("class", "input text");
    }else
      if($("#PersonaTipoDePersona").val() == 0){
        hide_juridica();
      }
    $("#PersonaTipoDePersona").change(function(){
      if($(this).val() == 1){
       hide_natural();
       //Change label to not required "celular" for "juridica"
       $("#PersonaCelular").parent('div').attr("class", "input text");
      }
      else
        if($(this).val() == 0){
         hide_juridica();
         //Change label to required "celular" for "natural"
        $("#PersonaCelular").parent('div').attr("class", "input text required");
        }
    });

    $("#ClientePersonasNaturales").change(function(){
        $.ajax({
               type: 'GET',
               data: {id: $(this).val()}, 
               url: '/clientes/getCliente',
               error: function(xhr, status, error) { alert('Error: '+ xhr.status+ ' - '+ error); },
               success: function(response) {
            	   $('#ClienteFacturaANombreDe').html(response);
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
