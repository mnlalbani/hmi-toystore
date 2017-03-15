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
$('.modal').modal();
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

      //desactivar boton continuar en direccion
      if($('input[name=direccionEnvio]:checked').length > 0){
            $('.btn-direccion-carro').prop('disabled',false);
            $('.response-direccion').prop('hidden',true);
      }else{
            $('.btn-direccion-carro').prop('disabled',true);
            $('.response-direccion').prop('hidden',false);
      }
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
      //desactivar continuar al elegir pago
      if($('input[name=pago]:checked').length > 0){
            $('.btn-continuar-pago').prop('disabled',false);
            $('.response-pago').prop('hidden',true);
      }else{
            $('.btn-continuar-pago').prop('disabled',true);
            $('.response-pago').prop('hidden',false);
      }
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
                  window.location.href = "orden-perfil.php?vaciar=true";
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
      //Validar si carro esta vacio
      if($('.aux').length > 0){
            $('.carro-btn').prop('disabled',false);
      }else{
            $('.carro-btn').prop('disabled',true);
      }//fin validacion carro boton

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
      //Editar Direccion envio
      $('.editar-direccion').unbind('click');
      $('.editar-direccion').click(function(e){
            e.preventDefault();
            var id = $(this).attr('value');
            $.post('php/editar-direccion.php',{id:id,mostrar:true},function(data){
                  console.log(data);
                  var respuesta = JSON.parse(data);
                  $('.direccionEditar').val(respuesta.direccion);
                  $('.id-direccion').val(respuesta.id)
                  console.log(respuesta.direccion);
                  $('.modal').modal('open');
            });
           
      });
      //eliminar direccion
      $('.eliminar-direccion').unbind('click');
      $('.eliminar-direccion').click(function(e){
            e.preventDefault();
            var id = $(this).attr('value');
            var response = confirm("Está seguro que desea eliminar esta direccion?");
            if(response){
                   $.post('php/eliminar-direccion.php',{id:id},function(data){
                        $('.fila-direccion').fadeOut(1000,
					function(){
						$('.fila-direccion').remove();
					});
				alert('Direccion Eliminada Correctamente');
                   });
            }else{
                  	alert('Direccion No liminada');
            }
           
            });
           //Edita pago
            $('.editar-pago').unbind('click');
            $('.editar-pago').click(function(e){
            e.preventDefault();
            var id = $(this).attr('value');
            $.post('php/editar-pago.php',{id:id,mostrar:true},function(data){
                  var respuesta = JSON.parse(data);
                  $('#metodo').val(respuesta.metodo);
                  $('#numero').val(respuesta.termina);
                  $('#expira').val(respuesta.expira);
                  $('.id-pago').val(respuesta.id);
                  $('.modal').modal('open');
            });
      });
      //eliminar pago
      $('.eliminar-pago').unbind('click');
      $('.eliminar-pago').click(function(e){
            e.preventDefault();
            var id = $(this).attr('value');
            var response = confirm("Está seguro que desea eliminar esta tarjeta?");
            if(response){
                   $.post('php/eliminar-pago.php',{id:id},function(data){
                        $('.fila-pago').fadeOut(1000,
					function(){
						$('.fila-pago').remove();
					});
				alert('Tarjeta Eliminada Correctamente');
                   });
            }else{
                  	alert('Tarjeta No liminada');
            }
           
            });

$('input.autocomplete').autocomplete({
    data: {
      "Capitan America": null,
      "Nintendo Switch": null,
      "Soldados de Plastico": null,
      "Nintendo": null,
      "Marvel": null,
      "Juegos de Exterior": null,
      "Niñas": null,
      "Niños": null,
      "Juegos de Mesa": null,
      "Juegos para bebés":null,
      "Carros": null,
      "Muñecas": null,
      "Pelota": null,
      "Bicicleta": null
    }
  });
      
});