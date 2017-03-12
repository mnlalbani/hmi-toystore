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
       $('.carousel.carousel-slider').carousel({fullWidth: true});
      //Select
      $('select').material_select();
      //Side Nav
      $(".button-collapse").sideNav();

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
});