$(document).ready(function(){
    $("#btCadastrar").click(function(){
        var nome = $("#inpNome").value();
        var sobrenome = $("#inpSobrenome").value();
        var email = $("#inpEmail").value();
        fLocalCadastrar(nome,sobrenome,email);
    });
    $("#btCancelar").click(function(){

    });
});


function fLocalCadastrar(nome,sobrenome,email){
    $.ajax({
        data:{
             ajax_nome: nome,
             ajax_sobrenome: sobrenome,
             ajax_email: email,
        },
        type:"POST",
        url:"php/cadastroPaciente.php",
        success: function(){
             alert("E-mail enviado com sucesso!");
             return true;
        }
     });
};