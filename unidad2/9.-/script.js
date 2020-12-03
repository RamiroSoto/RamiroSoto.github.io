let contador -1;

function agregarElementos(){
	let body = document.getElementById('body');
	let titulo = document.createElement('h1')

	titulo.setAttribute('class', 'titulo'+contador);
    titulo.innerText = 'Elemento creado desde JavaScript';
    body.appendChild(titulo);
	

	let texto = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod");
	
	let parrafo = document.createElement("p");
	parrafo.setAttribute('class', 'parrafo'+contador);
	parrafo.appendChild(texto);
	parrafo.classList.add("parrafo");

	body.appendChild(parrafo);

	contador++;
}

