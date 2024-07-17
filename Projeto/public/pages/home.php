<a href="?page=create_user">cadastrar_user</a>
    <hr>
<a href="?page=contato">contato</a>
   
    <hr>
    

<h2>Página inicial</h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>nome</th>
            <th>email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
$users = all('users');
foreach ($users as $user):
?>
        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->name;?></td>
            <td><?=$user->email;?></td>
            <td>
                <a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>