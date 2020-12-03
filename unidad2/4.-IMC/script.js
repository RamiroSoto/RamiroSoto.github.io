function calcularIMC(){
    let vPeso = document.getElementById('peso').value;
    let vAltura = document.getElementById('altura').value;
    let categoria = ""
    
    let resultado = (vPeso / (vAltura * vAltura)) * 100;
    resultado = (Math.round(resultado)) / 100;

    let vIMC = document.getElementById('imc');

    vIMC.innerText = resultado;

    if(resultado<18.5){
		categoria = "Infrapeso"
	}else if ((resultado>=18.5)||(resultado<=24.9)){
		categoria = "Peso normal"
	}else if ((resultado>=25)||(resultado<=29.9)){
		categoria = "sobrepeso"
	}else if ((resultado>=30)||(resultado<=34.9)){
		categoria = "Obesidad"
	}else if (resultado>=35){
		categoria = "Obesidad extrema"
	}

	vIMC.innerText = `${categoria}: ${resultado.toFixed(2)}`

    //vIMC.setAttribute("class", "titulo-principal");
    //vIMC.classList.add()
    //vIMC.className = 
}

function Limpia() {
    document.getElementById('peso').value = ''
    document.getElementById('altura').value = ''
}