var botaoInfo =document.querySelectorAll(".btnInfo");
for(i=0; i<botaoInfo.length; i++){
    botaoInfo[i].addEventListener("click", function(){
        listaAninada = this.parentElement.firstElementChild;
        if(listaAninada.style.display=='none'){
            this.textContent ='Fechar';
            listaAninada.style.display='block';
        }else{
            this.textContent ='Info';
            listaAninada.style.display='none';
        }
    })
}