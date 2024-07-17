
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


  <div class="container">
    <h1>Contato</h1>
  
     <?get('message'); ?>

  
     <form action="pages/forms/contato.php" method="POST" role="form">

      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
      </div>
      <hr>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Informe seu E-mail" >
      </div>
      <hr>

      <div class="form-group">
        <label for="subject">Assunto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Qual seu assunto?">
      </div>

      <hr>

      <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">Digite sua mensagem</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>


</body>

</html>

