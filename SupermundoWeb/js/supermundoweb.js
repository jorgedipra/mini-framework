$(document).ready(function(){
    /**
     * [$Titulo frases/contenido html]
     * @type {String}
     */
    $Titulo='Supermundo Web';
    $CreadoPor='<span>Creado Por: <a href="http://jorgedipra.hol.es/#about" rel="nofollow">@jorgedipra</a></span>';


    $(".Titulo").html($Titulo);
    $(".CreadoPor").append($CreadoPor);
    $("#menu").append("<ul>");
    for (var i = 1; i < 4; i++) {
        if(titlePage==i){
            $("#menu ul").append(' <li class="ContenidoMenu current_page_item" id="Menuli'+i+'"><a href="#"  title=""></a></li>');
        }else{
            $("#menu ul").append(' <li class="ContenidoMenu" id="Menuli'+i+'"><a href="#"  title=""></a></li>');
        }
    }
    $("#Menuli1 a").html("Inicio")
                    .attr({href: 'index.html'});
    $("#Menuli2 a").html("Servicios")
                    .attr({href: 'Servicios.html'});
    $("#Menuli3 a").html("Contacto ")
                    .attr({href: 'Contacto.html'});
    for (var i = 1; i < 4; i++) {
        $(".style1").append('<li class="first"><p class="date"><a class="a'+i+'" href="#"></a></p>'+
                    '<h3 class="b'+i+'"></h3>'+
                    '<p><a class="c'+i+'" href="#"></a></p></li>');
    }
    $(".a1").html("Abril<b>17</b>");
    $(".a2").html("Abril<b>18</b>");
    $(".a3").html("Abril<b>18</b>");
    $(".b1").html("Creacion de pagina");
    $(".b2").html("Creacion de Servicios");
    $(".b3").html("Creacion de Contacto");
    $(".c1").html("En este espacio debe colocar información general de la empresa, algunas imágenes y/o videos");
    $(".c2").html("Aquí se describen los servicios que presta la empresa y se usan imágenes y/o videos.");
    $(".c3").html("cree un formulario de contacto donde los usuarios puedan solicitar más información, este tendrá los campos de nombre, apellido, e-mail, teléfono y comentario");

    $("#copyright").html("<span>&copy; Sitio Web ficticio desarrollado para las actividades del curso de diseño de paginas web accequibles  Sena virtual 2013. </span>");
});