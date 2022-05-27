
var TextNeon = document.getElementById('neonText')
var Time = 9500

function AparecerNeon(){
    if(TextNeon.style.display="none"){
        setTimeout(function(){
            TextNeon.style.transition="opacity 0.8s ease 1s";
            TextNeon.style.display="block"
        }, Time)
        
        setTimeout(function(){
            TextNeon.style.opacity="1"
            console.log("En", Time, "se inicio el text neon y en", Time+500, "se termino")
        }, Time+500)
    }
    
}

AparecerNeon()