$(document).ready(function() {
  $('#ClienteCriteria').watermark('Criterio de búsqueda');  
  $("#ClienteChoice").change(function(){
    if($(this).val() == 'especialidad'){
      $.ajax({
              type: 'GET',
              url: '/clientes/show_especializaciones',
              success: function(data){
                  $("#ClienteCriteria").parent('span').hide();
                  $("#ClienteCriteria").parent('span').parent('div').after(data);
                }
      });
    }
    else {
      $("#ClienteEspecializacionId").remove();
      $("#ClienteCriteria").val('');
      $("#ClienteCriteria").parent('span').show();
    }
  });
      
});