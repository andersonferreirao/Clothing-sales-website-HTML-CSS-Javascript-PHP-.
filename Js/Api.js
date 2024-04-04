window.onload = function Page() {
    let usuario = document.getElementById("nome");
    let email = document.getElementById("email");
    let imagem = document.getElementById("imagem");
    let endereco = document.getElementById("endereco");
    let telefone = document.getElementById("telefone");
    let cidade = document.getElementById("cidade");
    let estado = document.getElementById("estado");
    let cep = document.getElementById("cep");

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        const obj = JSON.parse(this.responseText);

          console.log(obj.nome)
          console.log(obj.foto)
          let subs = obj.foto.substring(1);
    usuario.innerText =  	obj.nome;
      imagem.src = subs;

        
    }

    xhttp.open("GET", "http://localhost/web/Model/Api.php");
    xhttp.send();
}