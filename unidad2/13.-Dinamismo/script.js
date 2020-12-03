let inicio;

/*function saludar(nombre=prompt("ingrese un nombre: ")){
    document.write("hola " +nombre+" <br>");
}

function empezar(){
    inicio = window.setInterval(saludar(),7000)
}*/

function detener(){
    clearTimeout(inicio);
}

/*function empezar(){
	setInterval(function saludar(){nombre=prompt("Teclea un name: ");alert("hola "+nombre+"!!");},5000);
}*/

function saludar(){
    nombre=prompt("Teclea un name: ");
    alert("hola "+nombre+"!!")
}


function empezar(){
    inicio = setInterval(cambiar_fondo,3000);
    //inicio = window.setInterval(saludar,5000);
    //inicio = window.setInterval(fuction(){saludo("juan");},3000 )
}

let body = document.querySelector("body");
function cambiar_fondo(){
    let body = document.querySelector("body");
    console.log(body.style.backgroundColor);
    if (body.style.backgroundColor=="lime"){
        body.style.backgroundColor="blue";
    }else{
        body.style.backgroundColor="lime"
    }
   // body.style.backgroundColor == body.style.backgroundColor = "line" ? "blue" : "lime";
}