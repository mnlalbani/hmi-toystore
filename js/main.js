$(document).ready(function(){
      //Carousel
      $('.carousel.carousel-slider').each(function() {
var view = $(this);
var firstImage = view.find('.carousel-item img').first();
var imageHeight = firstImage[0].naturalHeight;
if (imageHeight > 0) {
view.css('height', imageHeight / firstImage[0].naturalWidth * view.width());
}
else {
view.css('height', 400);
}
});
      //slider
      $('.slider').slider();
      //carousel
       $('.carousel.carousel-slider').carousel({fullWidth: true});
      //Select
      $('select').material_select();
      //Side Nav
      $(".button-collapse").sideNav();
      //collapsible
      $('.collapsible').collapsible();
      //init datepicker
      $('.datepicker').pickadate({
            min: 'Today',
            selectMonths: true,
            selectYears: 15
      });
      //materialbox
      $('.materialboxed').materialbox();
      //update input
      //Materialize.updateTextFields();
      
      //validacion de contraseña
      $('#password').change(function(){
            if($(this).val().length > 0){
                  $('#password2').prop('disabled', false);
            }else{
                  $('#password2').prop('disabled',true);
            }
      });
      $('#password2').change(function(){
            if($(this).val() != $('#password').val()){
                  $("#btn-registrar").prop('disabled',true);
            }else{
                  $("#btn-registrar").prop('disabled',false);
            }
      });

      //registrar usuario
      $("#registrarUsuario").unbind();
      $('#registrarUsuario').on('submit',function(e){
            e.preventDefault();
            var details = $('#registrarUsuario').serialize();
            $.post('php/usuario.php',details,function(data){
                  var arr = JSON.parse(data);
            console.log(arr);
            if(arr.success) { //Si el registro fué completado
				alert(arr.respuesta);
				window.location = "login.php";

			}
			else{ //Si ocurrió un error al registrar
				alert(arr.respuesta);
				window.location = "registro.php";
			}
            })
      })

      //comprar-direcciones
      $("#formulario-comprar-direcciones").unbind();
      $("#formulario-comprar-direcciones").on('submit',function(e){
            e.preventDefault();
            var direccion = $('input[name=direccionEnvio]:checked').val();
            var tipoEnvio = $('input[name=tipo-envio]:checked').val();
            $.post('php/carro-direccion.php',{direccion:direccion,tipoEnvio:tipoEnvio},function(data){
                  var arr = JSON.parse(data);
                if(arr.success) { //Si el registro fué completado
				//alert(arr.respuesta);
				window.location = "pago.php";

			}
			else{ //Si ocurrió un error al registrar
				//alert(arr.respuesta);
				window.location = "direccion.php";
			}  
            })
      })
      //comprar-metodo-pago
      $("#formulario-comprar-pago").unbind();
      $("#formulario-comprar-pago").on('submit',function(e){
            e.preventDefault();
            var pago = $('input[name=pago]:checked').val();
            $.post('php/carro-pago.php',{pago:pago},function(data){
                  var arr = JSON.parse(data);
                if(arr.success) { //Si el registro fué completado
				//alert(arr.respuesta);
				window.location = "checkout.php";

			}
			else{ //Si ocurrió un error al registrar
				//alert(arr.respuesta);
				window.location = "pago.php";
			}  
            })
      })
      //checkout
      $("#formulario-checkout").unbind();
      $("#formulario-checkout").on('submit',function(e){
            e.preventDefault();
            var details = $("#formulario-checkout").serialize();
            $.post('php/orden.php',details,function(data){
                  /*var arr = JSON.parse(data);
                if(arr.success) { //Si el registro fué completado
				//alert(arr.respuesta);
				window.location = "index.php";

			}
			else{ //Si ocurrió un error al registrar
				//alert(arr.respuesta);
				window.location = "checkout.php";
			}  */
                  alert("Orden Realizada Exitosamente");
                  window.location.href = "orden-perfil.php";
            })
      })
      //formulario carro , redirect on sesssion check
      $("#formulario-comprar-carro").unbind();
      $("#formulario-comprar-carro").on('submit',function(e){
            e.preventDefault();
            //var details = $("#formulario-comprar-carro").serialize();
            $.post('php/session-check-carro.php',function(data){
                  var response = JSON.parse(data);

                  if(response.success){
                        console.log("session iniciada");
                        window.location.href = "direccion.php";
                  }else{
                        console.log("sesion no iniciada");
                        window.location.href = "login.php?shop=true";
                  }
            })
      })


      $('.eliminarproducto').unbind('click'); 
	$('.eliminarproducto').click(function(e){
		e.preventDefault();
		var id = $(this).attr('value');
		var row= $(this).closest('.tarjeta');
		var respuesta = confirm('¿Está seguro que desea elliminar este producto?');
		if(respuesta){
			$.post('php/eliminar-producto.php',{id:id},function(data){
				row.fadeOut(1000,
					function(){
						row.remove();
					});
				alert('Producto Eliminado Correctamente');
		})
		}else{
			alert('Producto No Eliminado');
		}
	});//Fin eliminar producto

      //mostrar imagen seleccionada al subir eliminarproducto
     /* $('.file-path').unbind('change');
      $('.file-path').change(function(){
            var img = $(this).val();
            $(this).closest('img').attr('src',img);
      });*/

      
});