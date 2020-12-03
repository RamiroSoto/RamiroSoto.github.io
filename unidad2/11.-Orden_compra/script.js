var contador = 0;

function agregar(){
    const precio = document.getElementById("precio").value;
    const unidades = document.getElementById("unidades").value;
    const monto = (precio*unidades);
    let tablab = document.getElementById('tabody');
    var producto = document.getElementById("productos").value;
    var body = document.getElementsByTagName("body")[0];
    var tabla   = document.createElement("table");
    var tblBody = document.createElement("tbody");
   
    var hilera = document.createElement("tr");
    hilera.setAttribute("row", contador)
     
    var celda0 = document.createElement("td");
    var textoCelda0 = document.createTextNode(producto);
    celda0.appendChild(textoCelda0);
    hilera.appendChild(celda0);

    var celda = document.createElement("td");
     var textoCelda = document.createTextNode(precio);
     celda.appendChild(textoCelda);
     hilera.appendChild(celda);

    var celda2 = document.createElement("td");
    var textoCelda2 = document.createTextNode(unidades);
    celda2.appendChild(textoCelda2);
    hilera.appendChild(celda2);

    var celda3 = document.createElement("td");
    var textoCelda3 = document.createTextNode(monto);
    celda3.appendChild(textoCelda3);
    hilera.appendChild(celda3);

    let boton = document.createElement("button");
    boton.innerText = "editar";
    boton.setAttribute("onclick", "editar()");
    hilera.appendChild(boton);

    let boton2 = document.createElement("button");
    boton2.innerText = "eliminar";
    boton.setAttribute("onclick", "eliminar()");
    hilera.appendChild(boton2);
          
        
    tblBody.appendChild(hilera);
    

    tabla.appendChild(tblBody);
    body.appendChild(tabla);
    calcular()
    contador = contador+1;
    document.querySelector('.contador').innerHTML = contador;
    
}

var acumulador = 0;

function calcular() {
    const precio = document.getElementById("precio").value;
    const unidades = document.getElementById("unidades").value;
    const sub = (precio*unidades);
    
    
    acumulador = acumulador + sub;
    document.querySelector('.subtotal').innerHTML = acumulador;

    const iva = (acumulador* .16);
    document.querySelector('.iva').innerHTML = iva;

    const total = (acumulador + iva);
    document.querySelector('.total').innerHTML = total;

}


function editar(){

}

function eliminar(){
    
    contador = contador-1;
    document.querySelector('.contador').innerHTML = contador;
    document.getElementById("row"+""+contador).outerHTML="";
}