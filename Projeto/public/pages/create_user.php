
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário de usuário </title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


  <div class="container">
    <h1>Informações do Usuário</h1>

    <?get('message'); ?>
   
    <form action="/pages/forms/create_user.php" method="POST" role="form">

      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
      </div>

      <hr>

      <div class="form-group">
        <label for="subject">Sobrenome</label>
        <input type="text" class="form-control" id="subject" name="sobrenome" placeholder="Informe seu sobrenome">
      </div>

      <hr>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Informe seu E-mail" >
      </div>
      <hr>

      <div class="form-group">
        <label for="subject">password</label>
        <input type="text" class="form-control" id="subject" name="password" placeholder="Digite sua senha">
      </div>
      

      <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
  </div>


</body>

</html>

