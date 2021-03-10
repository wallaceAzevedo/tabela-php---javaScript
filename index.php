<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <title>listar com JavaScript</title>
</head>
<body>
  <div class="container">
     <h2>Listar Usuários</h2>
    <span id="conteudo"></span>
  </div>  
    <script>
       var qnt_result_pg = 50; //quantidade de registro por página
       var pagina = 1; //pagina inicial
       $(document).ready(function () {
         listar_usuario(pagina, qnt_result_pg); //funçao para chamar resultado
       });

       function listar_usuario(pagina, qnt_result_pg){
        var dados = {
            pagina: pagina,
            qnt_result_pg: qnt_result_pg
        }   
        $.post('listar_usuario.php', dados , function(retorna) {
           //substitui o valor do seletor id"conteudo"  
           $("#conteudo").html(retorna);
         });
       }
    </script>
</body>
</html>