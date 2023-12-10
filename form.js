//document.addEventListener('DOMContentLoaded', function () {
    //var loginButton = document.getElementById('upload');

    //loginButton.addEventListener('click', function () {
        //alert('¡Felicidades! su registro ha sido completado. Por favor vuelva al inicio para iniciar sesión.');
    //});
//});
$(document).ready(function(){
    $('form').submit(function(e){
        let pass1 = $('#pass1').val();
        let cpass = $('cpass').val();
        if (pass1 !== cpass){
            alert('Password and Confirmation Password must be the same')
            e.preventDefault();
        }
    });
    function mostrarContrasena() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
});