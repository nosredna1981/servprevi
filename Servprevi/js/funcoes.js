function testarCampos() {
    var genero = document.getElementById("sltGenero");
    var idade = document.getElementById("idadeM");
    var tempo = document.getElementById("tempo");
    if (genero == "Masculino" || idade <=53 || tempo <=12){
        alert("Teste 1");
    }
    else if (genero == "Feminino" || idade <=48 || tempo <=12){
        alert("Teste 2");
    }
}

// function idade(nascimento, hoje) {
//     var diferencaAnos = hoje.getFullYear() - nascimento.getFullYear();
//     if ( new Date(hoje.getFullYear(), hoje.getMonth(), hoje.getDate()) < 
//          new Date(hoje.getFullYear(), nascimento.getMonth(), nascimento.getDate()) )
//         diferencaAnos--;
//     return diferencaAnos;
// }

// $("input").datepicker();


// $("button").click(function() {
//     var nascimento = $("input:eq(0)").datepicker("getDate");
//     var hoje = $("input:eq(1)").datepicker("getDate");
//     if ( nascimento && hoje )
//         $("span").text(idade(nascimento, hoje) + " anos");
// });

// console.log(idade(new Date(1980, 11, 11), new Date()));
// console.log(idade(new Date(2011, 1, 15), new Date()));
// console.log(idade(new Date(1993, 4, 31), new Date()));