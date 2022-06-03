$(document).ready(function(){

    fLocalPrintCard();
});



function fLocalPrintCard(){
    $.ajax({
        type: "GET",
        url: "../php/printCard1.php",
        dataType: "json",
        error: function() {
            alert("Infelizmente o servidor não conseguiu computar os dados!");
        },
        success: function(retorno){
            setTimeout(function(){
                
                var vPID = retorno[0].PID;
                var vCarb = retorno[0].carb;
                var vProt = retorno[0].prot;

                var conteudo = "";
                conteudo += "<div class='card' style='width: 18rem;'>"
                conteudo += "    <div class='card-body'>"
                conteudo += "      <h5 class='card-title'>"+vPID+"</h5>"
                conteudo += "       <p class='card-text'>"+vCarb+"</p>"
                conteudo += "       <p class='card-text'>"+vProt+"</p>"
                conteudo += "       <a href='#' class='btn btn-primary'>Detalhes</a>"
                conteudo += "    </div>"
                conteudo += "</div>"

                $("#insertCard").html(conteudo);

            },500);
        }
    });
};