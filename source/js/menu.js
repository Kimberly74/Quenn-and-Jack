var usuario = window.location.hash.substring(1);
window.onload=function(){
    document.getElementById("usuario").innerHTML = usuario;
}

function cerrar(){
    window.location.replace('index.html');
}

function menu(){
    window.location.replace('../menu.html'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function inventario(){
    window.location.replace('ver.php');
    window.location.replace('inventario/ver.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function proveedor(){
    window.location.replace('ver.php');
    window.location.replace('proveedor/ver.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function cliente(){
    window.location.replace('ver.php');
    window.location.replace('cliente/ver.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function producto(){
    window.location.replace('ver.php');
    window.location.replace('producto/ver.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function notas(){
    window.location.replace('notas.php');
    window.location.replace('notas/ver.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function editar(){
    window.location.replace('editar.php');
    window.location.replace('editar.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}

function agregar(){
    window.location.replace('agregar.php');
    window.location.replace('agregar.php'+'#'+ usuario);
    document.getElementById("usuario").innerHTML = usuario;
}