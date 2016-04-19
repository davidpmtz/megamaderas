/*!
 * Start Bootstrap - Freelancer Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

//Slideshow con jQuery sin plugins
 
$(function() {     //variable para el temporizador y tomamos la clase que contiene las imagenes
        
    var tmrTemporizador = null,
        $objSlideShow = $('.content-img-carrousel');     //ocultamos la ultima imagen (por defecto aparece de primera)
        
    $objSlideShow.find('li:gt(0)').hide('fast');          //funcion que contiene el temporizador
        
    $.fntSlideShow = function() {         //le asignamos el codigo al temporizador
                
        tmrTemporizador = setInterval(function() {             //variables para almacenar los elementos (actual y el que sigue en la lista)
                        
            var $objActual, $objSiguiente;

                         //si ningun item de la lista tiene la clase clsImagenActiva
                        
            if ($objSlideShow.has('.clsImagenActiva').length == 0) {                 //buscamos la primer imagen y se la asignamos
                                
                $objSlideShow.find('li:first').addClass('clsImagenActiva');            
            }                          //obtenemos la imagen que esta activa (visible)
                        
            $objActual = $objSlideShow.find('.clsImagenActiva');                          //aun es el fin de la lista de imagenes?
                        
            if ($objActual.next().length > 0) {                 //bien, entonces tomamos el siguiente elemento y lo almacenamos
                                
                $objSiguiente = $objActual.next();            
            } else {                 //es el fin de la lista? la siguiente imagen sera la primera de la lista
                                
                $objSiguiente = $objSlideShow.find('li:first-child');            
            }                          //mostramos suavemente el siguiente elemento (por si estuviera invisible)

            $objActual.removeClass('clsImagenActiva').fadeOut(200,function () {
                $objSiguiente.addClass('clsImagenActiva').fadeIn(200);
            });
                        
        }, 3000); //cada tres segundos se volvera a ejecutar
            
    };          //al colocar el puntero del raton sobre el slideshow este se pausa
        
    $('.content-img-carrousel').hover(function() {         //detenemos el temporizador
                    
            clearInterval(tmrTemporizador);    
        }, //al retirar el puntero del slideshow volvemos a activar el temporizador
            
        function() {         //llamada a la funcion que contiene el temporizador
                    
            $.fntSlideShow();    
        });          //iniciamos el slideshow
        
    $.fntSlideShow();
});
// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(document).ready(function() {
  $('#inBuscarProducto').on('keyup', function(event) {
    if (event.which==13 && $('#btnBuscarProducto').hasClass('btn-on-producto')) {
      if ($('#divProductos').length>0) {
        buscarProdutoA($('#inBuscarProducto').val());
      } else {
        parent.location=$('#ihRedirProductos').val()+'?busqueda='+$('#inBuscarProducto').val();
      }
    } else {
      findProduct();
    }
  });
  $('#inBuscarProducto').on('keydown', showProduct);
  $('#btnBuscarProducto').on('click', function(event) {
    event.preventDefault();
    if ($('#btnBuscarProducto').hasClass('btn-on-producto')) {
      if ($('#divProductos').length>0) {
        buscarProdutoA($('#inBuscarProducto').val());
      } else {
        parent.location=$('#ihRedirProductos').val()+'?busqueda='+$('#inBuscarProducto').val();
      }

    } else {
      $('#inBuscarProducto').focus();
    }
  });
    $('#liProductos').hover(function() {
      $('#liProductos > ul').show('400');
    }, function() {
      $('#liProductos > ul').hide('400');
    });

    $('#liServicios').hover(function() {
      $('#liServicios > ul').show('400');
    }, function() {
      $('#liServicios > ul').hide('400');
    });

    addMenuOptions();
});

function addMenuOptions() {
    console.log($('#ihbtnBuscarProducto').val());
    console.log(window.location.href);
    $.ajax({
        url: $("#listOptions").val(),
        data: {}
    })
    .done(function(data) {
        productos = data.tipos;
        servicios = data.servicios;
        $.each(productos,function(index, el) {
            $li = $("<li/>");
            $icon = $("<i class='fa fa-leaf' style='color:green;'></i>&nbsp;&nbsp;");
            $a = $('<a/>',{href:$("#ihRedirProductos").val()+'/'+el.id,text:el.tipo});
            $li.append($icon);
            $li.append($a);
            $('#ulProductos').append($li);
        });

        $.each(servicios,function(index, el) {
            $li = $('<li/>');
            $icon = $("<i class='fa fa-cog' style='color:green;'></i>&nbsp;&nbsp;");
            $a = $('<a/>',{href:$("#ihService").val()+'/'+el.id,text:el.nombre});
            $li.append($icon);
            $li.append($a);
            $('#ulServicios').append($li);
        });
        console.log(data);
    })
    .fail(function() {})
    .always(function() {});
}

function findProduct() {
  var productos = $("#divProductos > .portfolio-producto");
  var busqueda = $("#inBuscarProducto").val();
  busqueda = busqueda.toLowerCase();
  $.each(productos,function(i, el) {
    var contenido = productos.eq(i).text().toLowerCase();
    var ix = contenido.indexOf(busqueda);
    if (ix == -1 && productos.eq(i).is(":visible")) {
      productos.eq(i).hide();
    }
  });
  if (busqueda.trim()!='') {
    $('#btnBuscarProducto').addClass('btn-on-producto');
  } else {
    $('#btnBuscarProducto').removeClass('btn-on-producto');
  }
}

function showProduct() {
  var productos = $("#divProductos > .portfolio-producto");
  var busqueda = $("#inBuscarProducto").val();
  $.each(productos,function(i, el) {
    var contenido = productos.eq(i).text().toLowerCase();
    var indexof = contenido.indexOf(busqueda);
    if (indexof == -1 && productos.eq(i).is(":hidden")) {
      productos.eq(i).show();
    }
  });
  if (busqueda.trim()!='') {
    $('#btnBuscarProducto').addClass('btn-on-producto');
  } else {
    $('#btnBuscarProducto').removeClass('btn-on-producto');
  }
}

function buscarProdutoA(busqueda) {
  $.ajax({
    url: $('#ihbtnBuscarProducto').val(),
    data: {busqueda: busqueda}
  })
  .done(function(data) {
    if ($('#divProductos').length>0) {
      $('#divProductos').empty();
      $('#divProductos').html(data);
    } else {
      window.location = $('#ihRedirProductos').val();
      $('#divProductos').empty();
      $('#divProductos').html(data);
    }
  })
  .fail(function() {
  })
  .always(function() {
  });

}
