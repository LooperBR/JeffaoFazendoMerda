jQuery(document).ready(function($)
{
    //FIXED HEADER
    window.onscroll = function() 
    {
        if(window.pageYOffset > 140) {
            $('#header').addClass("active");
        } else {
            $('#header').removeClass("active");
        }
    };
});

function mostrarOcultarSenha()
{
    var senha=document.getElementById("senha");
    if(senha.type=="password"){
        senha.type="text";
    } else {
        senha.type="password";
    }
}



