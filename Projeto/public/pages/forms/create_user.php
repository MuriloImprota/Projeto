<?php

require "../../../bootstrap.php";


if (isEmpty()) {

    flash('message', 'Preencha todos os campos');

    return redirect('create_user');

} 
    $validate = validate([
        'name' => 's',
        'sobrenome' => 's',
        'email' => 'e',
        'password' => 's',
    ]);

    print_r($validate);

    $cadastrado = create('users', $validate);

    if ($cadastrado) {

        flash('message','cadastrado com sucesso', 'success');

        return redirect('create_user');

    } else{
        
        flash('message','erro de cadastro', 'danger');

        return redirect('create_user');
    }