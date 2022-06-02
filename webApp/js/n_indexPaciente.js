$(document).ready(function(){
    
    fLocalPrintCard();
});



function fLocalPrintCard(){
    $.ajax({
        type: "GET",
        url: "../php/php-ListFilmes.php",
        dataType: "json",
        error: function() {
            alert("Infelizmente o servidor não conseguiu computar os dados!");
        },
        success: function(retorno){
            setTimeout(function(){
                var cards = retorno[0].card
                
                $asd = retorno[i].arquivoIMG;

                $("#cardID").html(ID);
                $("#cardPID").html(PID);
                $("#cardTitulo").html(Tit);
                $("#cardCarb").html(Carb);
                $("#cardProt").html(Prot);


            },500);
        }
    });
};