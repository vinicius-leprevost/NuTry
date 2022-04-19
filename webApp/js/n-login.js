$(document).ready(function(){
    $('#modalCadastro').modal('show');
    
    $("#btEntrar").click(function(){
        usuario=$("#email").val();
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
        email=$("#email").val();
        celular=$("#celular").val();
        cpf=$("#cpf").val();
        dataNascimento=$("#nascimento").val();
        senha=$("#senha").val();
        confSenha=$("#confSenha").val();

        if(senha == confSenha){
            fLocalCadastrar(primeiroNome,ultimoNome,email,celular,cpf,dataNascimento,senha);
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
function fLocalCadastrar(primeiroNome,ultimoNome,email,celular,cpf,dataNascimento,senha){
    $.ajax({
       data:{
            ajax_pNome: primeiroNome,
            ajax_uNome: ultimoNome,
            ajax_email: email,
            ajax_celular : celular,
            ajax_cpf : cpf,
            ajax_dataNascimento : dataNascimento,
            ajax_senha : senha,
       },
       type:"POST",
       url:"php/cadastroUsuario.php",
       success: function(){
            alert("Cadastrado com sucesso!")
            return true;
       }

    });


}



