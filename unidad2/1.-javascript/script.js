/*let nombre = "Ramiro"
let edad = prompt("Introduce tu edad: ")
let trabaja =true;

document.write("<h1>Hello world!</h1>")
document.write("Hello " + nombre + "!, tu edad es " + edad + ".")

/*estructuras*/
/*if(trabaja){
	alert("trabaja");
}else{
	alert("jala xd");
}

switch(parseFloat(edad)){
	case 20:
		document.write("viejo");
		break;
	case 30:
		document.write ("JEJE");
		break;
	case 10:
		document.write("joven");
		break;
}*/


/*ciclos*/

let tabla =prompt("selecciona una tabla de multiplicar");
let i=0;

/*for (i=0; i<10; i++){
	document.write('<p class="color">' + tabla + "x" + (i+1) + "=" + tabla*(i+1) + "</p>");
}*/

while (i<10){
	document.write('<p class="color">' + tabla + "x" + (i+1) + "=" + tabla*(i+1) + "</p>");
	i++;
}

/*do{
	document.write('<p class="color">' + tabla + "x" + (i+1) + "=" + tabla*(i+1) + "</p>");
	i++;
}while(i<10);*/


/*ARREGLOS*/

let arreglo=[1, 2, 3];

/*
Pagina que permita leer las calificaciones de un alumno y su promedio
colocar en la pantalla la calificación y promedio
*/