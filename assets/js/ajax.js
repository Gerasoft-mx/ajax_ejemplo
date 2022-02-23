let validar = {

     detalle: {
          numero: 0
     },
};

$(document).ready(function(){

     $("#btn-validar").click(function() {
          let numero = $("#numero");
          if(!isNumber(numero.val())) {
               alert('Debe ingresar un número válido');
               return;
          } else if( parseInt(numero.val()) <= 0 ) {
               alert('Debe ingresar un número válido');
               return;
          }

          validar.detalle.numero = numero.val();
     });

     $("#frm-comprobar").submit(function(){

          let form = $(this);

          $.ajax({
               dataType: 'JSON',
               type: 'POST',
               url: form.attr('action'),
               data: validar.detalle,
               success: function (r) {
                    console.log(r);
                    alert(JSON.stringify(r));
                    if(r) window.location.href = '?c=Comprobar';
               },
               error: function(jqXHR, textStatus, errorThrown){
                    console.log(errorThrown + ' ' + textStatus);
               }   
          });
          


          return false;     
     });
     
});

function isNumber(n) {
     return !isNaN(parseFloat(n)) && isFinite(n);
}

