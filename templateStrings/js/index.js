window.onload = async function inicia(){
    var resultado = await fetch("php/getapps.php", {
        method: "GET"
    });

    var dados = await resultado.json();

//variavel recebe funcao

    for(var i = 0 ; i < dados.length ; i++){
        var conteudo =  
                        `<div class="card">
                            <div class="card-logo">
                                <img src="https://cdn-icons-png.flaticon.com/512/39/39552.png" width="40px">
                            </div>
                            <div class="card-titulo">${dados[i].nome}</div>
                            <div class="card-descricao">
                                ${dados[i].descricao}
                            </div>
                            <div class="card-acao">
                                <button>READ MORE</button>
                            </div>
                        </div>
                        </br>`;

        document.getElementById('aplicativos').innerHTML += conteudo;
    }

}





