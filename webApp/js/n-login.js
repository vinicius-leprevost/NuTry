$(document).ready(function(){

    $("#btEntrar").click(function(e){
        e.preventDefault();
        email=$("#loginEmail").val();
        senha=$("#loginSenha").val();
        fLocalEntrar(email, senha);
        
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
        altura=$("#altura").val();
        plano=$("#plano").val();
        



        if(primeiroNome == "" || ultimoNome == "" || email == "" || celular == "" || 
            cpf == "" || dataNascimento == "" || senha == "" || confSenha == "" ||altura == ""||plano == ""){
                window.alert("Preencha todos os campos");
        } else if(senha == confSenha){
            fLocalCadastrar(primeiroNome,ultimoNome,email,celular,cpf,dataNascimento,senha,altura,plano);
            if(fLocalCadastrar){
                $('#modalCadastro').modal('hide');
            } 
        }else{
            window.alert("Erro: As senhas não coincidem");
        }
    });

});


function fLocalEntrar(email, senha){
    $.ajax({
        data:{
            ajax_email: email,
            ajax_senha: senha,
        },
        type:"POST",
        dataType:"json",
        url:"php/loginUsuario.php",
        error:function(){ 
            alert("NÃO ESTÁ HAVENDO RETORNO DO PHP !!!");
        }, 
        success: function(retorno){
            console.log(retorno);
            if(retorno['autenticado']){
                alert("USUÁRIO AUTENTICADO");
                window.location.href="paginas/index.html";
    
            }else{            
                alert("Aqui Email ou senha incorretos, tente novamente");
            }
        },
    });
}
function fLocalFiliar(){
    
}
function fLocalHelp(){

}
function fLocalCadastrar(primeiroNome,ultimoNome,email,celular,cpf,dataNascimento,senha,altura,plano){
    $.ajax({
       data:{
            ajax_pNome: primeiroNome,
            ajax_uNome: ultimoNome,
            ajax_email: email,
            ajax_celular : celular,
            ajax_cpf : cpf,
            ajax_dataNascimento : dataNascimento,
            ajax_senha : senha,
            ajax_altura : altura,
            ajax_plano : plano,
       },
       type:"POST",
       url:"php/cadastroUsuario.php",
       success: function(){
            alert("Cadastrado com sucesso!");
            return true;
       }
    });


}



