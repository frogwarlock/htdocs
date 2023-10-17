async function listar() {

    var promise = await fetch("php/listar.php", {
        method: "GET"
    });

    var dados = await promise.json();

    alert(dados[3].titulo);
}