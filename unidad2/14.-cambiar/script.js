let inicio;


function cambiar_imagen(){
    let body = document.getElementById("img");
    if(body.getAttribute("src") == "img/1.jpg"){
        body.setAttribute("src","img/2.jpg");
    }else if(body.getAttribute("src") == "img/2.jpg"){
        body.setAttribute("src","img/3.jpg"); 
    }else{
        body.setAttribute("src","img/1.jpg");
    }
}

function empezar(){
    inicio = setInterval(cambiar_imagen,3000);
}

function detener(){
    window.clearInterval(inicio);
}