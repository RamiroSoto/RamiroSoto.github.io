function potencia (){
	const base = document.getElementById('a').value;
	const exp = document.getElementById('b').value;
	let q = 1;
	q = Math.pow(base, exp);

	document.querySelector('.q').innerHTML = q;

}


function factorial(){ 
	const dato = document.getElementById('m').value;
        let r = 1;
        for(let i = dato; i>0; i--){
            r *= i;
        }
        document.querySelector('.r').innerHTML = r;
}