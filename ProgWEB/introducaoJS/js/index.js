var nome = document.getElementById('nome').value;

function somar(){
    var valor1 = parseInt(document.getElementById("valor1").value);
    var valor2 = parseInt(document.getElementById("valor2").value);

    var soma = valor1 + valor2;

    document.getElementById("resultadoSoma").value = soma;
}

function subtrair(){
    var valor3 = parseInt(document.getElementById("valor3").value);
    var valor4 = parseInt(document.getElementById("valor4").value);
    
    var subtrair = valor3 - valor4;

    document.getElementById("resultadoSub").value = subtrair;
}

function multiplicar(){
    var valor5 = parseInt(document.getElementById("valor5").value);
    var valor6 = parseInt(document.getElementById("valor6").value);

    var multiplicar = valor5 * valor6;

    document.getElementById("resultadoMulti").value = multiplicar;
}

function dividir(){
    var valor7 = parseInt(document.getElementById("valor7").value);
    var valor8 = parseInt(document.getElementById("valor8").value);

    var dividir = valor7 / valor8;

    document.getElementById("resultadoDivs").value = dividir;
}

function limpaSoma(){
    document.getElementById("resultadoSoma").value = "";
    document.getElementById("valor1").value = "";
    document.getElementById("valor2").value = "";
}

function limpaSub(){
    document.getElementById("resultadoSub").value = "";
    document.getElementById("valor3").value = "";
    document.getElementById("valor4").value = "";
}

function limpaMulti(){
    document.getElementById("resultadoMulti").value = "";
    document.getElementById("valor5").value = "";
    document.getElementById("valor6").value = "";
}

function limpaDivs(){
    document.getElementById("resultadoDivs").value = "";
    document.getElementById("valor7").value = "";
    document.getElementById("valor8").value = ""; 
}