
// Login adm
$(document).on("click","#logar",function(){
  var parametros = {
        "email": $("#email").val(),
        "senha": $("#senha").val()
       
    };

    $.ajax({
        type:"post", //como enviar
        url:"https://tcc2020.000webhostapp.com/functions/login.php",//para onde enviar
        data:parametros,//o que enviar
        //se der certo
        success: function(data){
        
        if(data != "0"){
        user=JSON.parse(data);
        // console.log(user.nome);
        localStorage.setItem('user',user);
        }else{
            alert("usuario ou senha deu ruim")
        }},
        //se der errado
        error: function(data){
            alert("Deu ruim");
        }
    });    
});
// Cadastar aluno
$(document).on("click","#cadastraraluno",function(){
  var parametros = {

        "nome": $("#nome").val(),
        "email": $("#email").val(),
        "senha": $("#senha").val(),
        "biotipo": $("#biotipo").val()
       
    };

    $.ajax({
        type:"post", //como enviar
        url:"https://tcc2020.000webhostapp.com/functions/cadastraraluno.php",//para onde enviar
        data:parametros,//o que enviar
        //se der certo
        success: function(data){
           alert(data);
        },
        //se der errado
        error: function(data){
            alert(data);
        }
    });    
})

//parte de listar alunos
function listar(){
   $.ajax({
    type:"post", //como enviar my dear
    url:"https://tcc2020.000webhostapp.com/functions/listar.php", //passa a url para enviar as coisas
    dataType:"json",//oque enviar
    //se der certo
    success: function(data){
      var itemLista = "";
      $.each(data.pessoas,function(i,dados){
        itemLista += "<option value='"+dados.codigo+"'>"+dados.nome+"</option>";
      });
      $("#lista").html(itemLista);
    },
    //se der ruim
    error: function(data){
      alert("erro ao listar");
    }
  });
}

//atualizar medidas
$(document).on("click","#attmedidas",function(){
  var parametro = {
    "codigo": $("#lista").val(),
    "peso": $("#peso").val(),
    "altura": $("#altura").val(),
    "bracoesq": $("#bracoesq").val(),
    "bracodir": $("#bracodir").val(),
    "antebracoesq": $("#antebracoesq").val(),
    "antebracodir": $("#antebracodir").val(),
    "ombro": $("#ombro").val(),
    "torax": $("#torax").val(),
    "abdomen": $("#abdomen").val(),
    "cintura": $("#cintura").val(),
    "coxaesq": $("#coxaesq").val(),
    "coxadir": $("#coxadir").val(),
    "panturrilhaesq": $("#panturrilhaesq").val(),
    "panturrilhadir": $("#panturrilhadir").val(),
    "quadril": $("#quadril").val()
  };
  $.ajax({
    type:"post",//como enviar
    url:"https://tcc2020.000webhostapp.com/functions/attmedidas.php",//url pra enviar daqle naipe
    data:parametro,//parametro
    //se der good
    success: function(data){
      alert(data);  
    },
    //se der errado
    error: function(data){
      alert("erro ao atualizar medidas");
    }
  })
});