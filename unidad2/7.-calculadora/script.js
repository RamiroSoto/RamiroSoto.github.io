function mostrar(caracter) {
    document.getElementById('pantalla').value += caracter
} 

function limpiar() {
    document.getElementById('pantalla').value = ''
}

function resolver() {
    let x = document.getElementById('pantalla').value
    let y = eval(x)

    document.getElementById('pantalla').value = y
}