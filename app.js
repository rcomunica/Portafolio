
var TextNeon = document.getElementById('neonText')
var time = 9500


function AparecerNeon(){
    if(TextNeon.style.display="none"){
        setTimeout(function(){
            TextNeon.style.transition="opacity 0.8s ease 1s";
            TextNeon.style.display="block"
        }, time)
        
        setTimeout(function(){
            TextNeon.style.opacity="1"
            console.log("En", time, "se inicio el text neon y en", time+500, "se termino")
        }, time+500)
    }
    
}

AparecerNeon()


  let buttons = document.querySelectorAll('a');
  buttons.forEach((button) => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      let target = e.currentTarget.getAttribute('href');
      
      document.querySelector(target).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
