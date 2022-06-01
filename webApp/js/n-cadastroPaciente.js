$(document).ready(function(){
    $("#btCadastrar").click(function(){
        var nome = $("#inpNome").val();
        var sobrenome = $("#inpSobrenome").val();
        var email = $("#inpEmail").val();
        fLocalCadastrara(nome,sobrenome,email);
    });
    $("#btCancelar").click(function(){

    });
});


function fLocalCadastrara(nome,sobrenome,email){
    $.ajax({
        data:{
             ajax_nome: nome,
             ajax_sobrenome: sobrenome,
             ajax_email: email,
        },
        type:"POST",
        url:"../php/cadastroPaciente.php",
        success: function(){
             alert("E-mail enviado com sucesso!");
             return true;
        }
     });
};