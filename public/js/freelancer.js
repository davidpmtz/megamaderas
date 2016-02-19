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
  $('#inBuscarProducto').on('keyup', findProduct);
  $('#inBuscarProducto').on('keydown', showProduct);
  $('#btnBuscarProducto').on('click', function(event) {
    event.preventDefault();
    if ($('#btnBuscarProducto').hasClass('btn-on-producto')) {
      buscarProdutoA($('#inBuscarProducto').val());
    } else {
      $('#inBuscarProducto').focus();
    }
  });
});

function findProduct() {
  var productos = $(".portfolio-producto");
  var busqueda = $(this).val();
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
  var productos = $(".portfolio-producto");
  var busqueda = $(this).val().toLowerCase();
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
