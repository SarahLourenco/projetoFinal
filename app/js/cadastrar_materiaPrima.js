$(document).ready(function() {
  $("#feedbackCadastro").hide(); // oculta div mensagem de resultado do ajax

  // Quando usuário clicar em salvar será feito todos os passo abaixo
  $('.btn-cadastrar_materiaPrima').click(function(e) {
    e.preventDefault();
    var dados = $('#cadastrar_materiaPrima').serialize();

    $.ajax({
      type: 'POST',
      url: 'cadastrar_materiaPrima.php',
      data: dados,
      success: function(response) {
        console.log(typeof(response));
        if (response == "sucesso") {
          //  alert("Cadastrado Com sucesso");
          $("#cadastrar_materiaPrima").find("textarea").val(""); // limpando formulario
          $("#cadastrar_materiaPrima").find("input").val("");
          $("#cadastrar_materiaPrima").find("select").val("");
          $("#feedbackCadastro").html("<h2> Cadastado com Sucesso </h2>");
          $("#feedbackCadastro").show();  // mostra div ajax result
          $("#cadastrar_materiaPrima").click(function() {
            $("#feedbackCadastro").hide();
          }); // fechando opçao ocultar apos mnsagem derro

        } else {
          $("#feedbackCadastro").html("<h2> Erro ao cadastrar </h2>");
          $("#feedbackCadastro").show();

          $("#cadastrar_materiaPrima").click(function() {
            $("#feedbackCadastro").hide();
          }); // fechando opçao ocultar apos mnsagem derro

        }
      }
    }); // fecha o ajax
  });



    $('.btn-excluir_materiaPrima').on("click", function(e) {
    //  e.preventDefault();
     var linha = $(this).closest("tr");
     var valor = linha.find("td").attr("data-id");
     var param = {id: valor};

      $.ajax({
      type: 'POST',
      url: 'excluir_materiaPrima.php',
      data: param,
      success: function(response) {
        (typeof(response) === "string" && response === "1" ? linha.remove() : console.log("Erro ao excluir"));
      },
      erro: function(xhr,err){
        console.log(xhr);
        console.log(err);
      }
    }); // fecha o ajax

    });

}); // fecha principal
