
function gravar() {
    var form = document.getElementById('formulario');
    var dados = new FormData(form);

    fetch("php/gravar.php", {
        method: "POST",
        body: dados
    });
}

async function listar(){

    var promise = await fetch("php/listar.php",{
        method: "GET"
    });
    
   var dados = await promise.json();
   
   alert(dados[0].email);

}  