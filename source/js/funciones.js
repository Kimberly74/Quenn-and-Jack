function validar(){
    var usuario = document.getElementById("usuario").value;
    var contraseña = document.getElementById("contraseña").value;

    if(usuario=="Kim" && contraseña=="12345"){

    window.location.replace('menu.html'+'#'+ usuario);

    }
    else{
        alert("VERIFIQUE BIEN SUS DATOS")
    }
}
