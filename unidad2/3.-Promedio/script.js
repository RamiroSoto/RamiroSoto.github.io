let num = prompt("Cuantas calificaciones revisara: ")
let arreglo = [num];
var suma=0;
var promedio=0;

for (i=1;i<=num;i++){
	let cal = prompt("ingrese la calificación ", i)
	arreglo [i]=cal;
	document.write("<p>" + "calificacion  " + i + " es " + cal)
}

for (i=1;i<=num;i++){
	suma= (parseFloat(suma)+parseFloat(arreglo[i]));
}

promedio= (parseFloat(suma)/parseFloat(num));


document.write("<p>" + "promedio: "+ promedio)