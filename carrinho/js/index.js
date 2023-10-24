

// filmes

var conteudo = [
    {id: 1, titulo: "Kung Fu Panda", genero: "Animação"},
    {id: 2, titulo: "A Era do Gelo", genero: "Animação"},
    {id: 3, titulo: "Soul", genero: "Animação"},
    {id: 4, titulo: "Minha Mãe é uma peça", genero: "Comédia"}
];

for(var i = 0; i < conteudo.length; i++) {

    var html = 
    `<div class="card">
        <div class="card-titulo">${conteudo[i].titulo}</div>
        <div class="card-genero">${conteudo[i].genero}</div>
        <div class="card-acao" onclick="comprar(${conteudo[i].id})">COMPRAR</div>
    </div>`;

    document.getElementById('filmes').innerHTML += html;
   
}

function comprar(id){
    
    var dados = new FormData();
    dados.append("id_produto", id);

    fetch("php/comprar.php", {
        method: "POST",
        body: dados
    });
    
}