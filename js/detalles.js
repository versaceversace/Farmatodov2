  $(document).ready(function(){
    $(".cantidad").keyup(function(e){
        if($(this).val()!=''){
            if(e.keyCode==13){
                var id=$(this).attr('data-id');
                var precio=$(this).attr('data-precio');
                var cantidad=$(this).val();
                $(this).parentsUntil('.producto').find('.total').text('Total :'+(precio*cantidad));
                $.post('./js/modificarDatos.php',{
                    Id:id,
                    Precio:precio,
                    Cantidad:cantidad
                },function(e){
                    $("#total").text('Total: '+e);

                });
            }
        }
    })
  });
