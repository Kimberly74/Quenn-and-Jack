var usuario = window.location.hash.substring(1);
window.onload=function(){
    document.getElementById("usuario").innerHTML = usuario;
}

function regresar(){
    window.location.replace('Menu.html'+'#'+ usuario);
}