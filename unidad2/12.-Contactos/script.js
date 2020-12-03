let num = prompt("Cuantas contactos asignara: ")
let arreglo = [num];
let contador = 0;
let nom = [num];
let tel = [num];
let dire = [num];
let id = [num];

for (i=0;i<num;i++){
    var guardo = prompt("ingres el usuario ")
    nom [i] = guardo;
    guardo = prompt("ingres el telefono ")
    tel [i] = guardo;
    guardo = prompt("ingres el dirección ")
    dire [i] = guardo;
    id[i] = i;
}

let contacto={
    ide:  id,
    nombre: nom,
    telefono: tel,
    direccion: dire
}

for (i=0; i<num;i++){
    document.write("<p>"+"contacto: "+contacto.ide[i] + "<br>");
    document.write(contacto.nombre[i]+ "<br>");
    document.write(contacto.telefono[i]+ "<br>");
    document.write(contacto.direccion[i]+ "<br>");
    document.write("<br>");
}
