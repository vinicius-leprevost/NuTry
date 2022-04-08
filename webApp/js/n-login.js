$(document).ready(function(){
    $("#btEntrar").click(function(){
        usuario=$("#usuario").val();
        senha=$("#senha").val();
        fLocalEntrar(usuario, senha);
    });
    $("#btFiliar").click(function(){
        fLocalFiliar();
    });
    $("#btHelp").click(function(){
        fLocalHelp();
    });
    $("#btFinalizarCadastro").click(function(){
        primeiroNome=$("#p_nome").val();
        ultimoNome=$("#u_nome").val();
        email=$("").val();
        celular=$("").val();
        cpf=$("").val();
        dataNascimento=$("").val();
        dataCriacao=$("").val();
        usuario=$("").val();
        senha=$("").val();

        fLocalCadastrar();
    });

});


function fLocalEntrar(usuario, senha){

}
function fLocalFiliar(){
    
}
function fLocalHelp(){

}
function fLocalCadastrar(){
    $("#modalCadastro").modal(options);
    
    //window.location.href="paginas/cadastroUsuario.html";
}



