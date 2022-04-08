$(document).ready(function(){
    $('#modalCadastro').modal('show');
    
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
        /*
        primeiroNome=$("#p_nome").val();
        ultimoNome=$("#u_nome").val();
        email=$("#email").val();
        celular=$("#celular").val();
        cpf=$("#cpf").val();
        dataNascimento=$("#nascimento").val();
        usuario=$("#usuario").val();
        senha=$("#senha").val();
        */
        confSenha=$("#confSenha").val();
        var dados_cadastro = [$("#p_nome").val(),$("#u_nome").val(),$("#email").val(),$("#celular").val(),$("#cpf").val(),$("#nascimento").val(),$("#usuario").val(),$("#senha").val()];
        
        if(dados_cadastro[7] == confSenha){
            fLocalCadastrar(dados_cadastro);
            if(fLocalCadastrar){
                $('#modalCadastro').modal('hide');
            }
        }else{
            window.alert("Erro: As senhas não coincidem");
        }
    });

});


function fLocalEntrar(usuario, senha){

}
function fLocalFiliar(){
    
}
function fLocalHelp(){

}
function fLocalCadastrar(dados_cadastro){
    $.ajax({
       data:{
            ajax_pNome: dados_cadastro[0],
            ajax_uNome: dados_cadastro[1],
            ajax_email: dados_cadastro[2],
            ajax_celular : dados_cadastro[3],
            ajax_cpf : dados_cadastro[4],
            ajax_dataNascimento : dados_cadastro[5],
            ajax_usuario : dados_cadastro[6],
            ajax_senha : dados_cadastro[7],
       },
       type:"POST",
       url:"php/cadastroUsuario.php",
       success: function(){
            alert("Cadastrado com sucesso!")
            return true;
       }

    });


}



