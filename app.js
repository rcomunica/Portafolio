
var TextNeon = document.getElementById('neonText')
var time = 2000


function AparecerNeon(){
    if(TextNeon.style.display="none"){
        settimeout(function(){
            TextNeon.style.transition="opacity 0.8s ease 1s";
            TextNeon.style.display="block"
        }, time)
        
        settimeout(function(){
            TextNeon.style.opacity="1"
            console.log("En", time, "se inicio el text neon y en", time+500, "se termino")
        }, time+500)
    }
    
}

AparecerNeon()