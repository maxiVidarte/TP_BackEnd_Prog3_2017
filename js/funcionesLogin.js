function MostrarLogin()
{
    var funcionAjax= $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"MostrarLogin"}
    });
    funcionAjax.done(function(retorno){
        $("#contenido").html(retorno);
    });
}
function MostrarListadoPersonas(){
    var funcionAjax = $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"MostrarListadoUsuarios"}
    });
    funcionAjax.done(function(retorno){
        $("#contenido").html(retorno);
    });
}
function MostrarEstacionados(){
    var funcionAjax = $.ajax({
        url:"nexo.php",
        type:"post",
        data:{accion:"MostrarEstacionados"}
    });
    funcionAjax.done(function(retorno){
        $("#contenido").html(retorno);
    });
}
function AgregarPersonas(){
    console.log("hola mundo");
}
 
