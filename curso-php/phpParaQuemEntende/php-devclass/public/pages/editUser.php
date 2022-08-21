<h1>Editar Usuarios</h1>
<?= get('message') ?>
<?php $user = find('users', 'id', $_GET['id']); ?>
<br>
<br>

<form action="/pages/forms/updateUser.php" method="POST" role="form">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="name" class="form-control" name="name" placeholder="Primeiro Nome" value="<?= $user->name ?>">
    </div>

    <div class=" mb-3">
        <label for="lastname" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" placeholder="Sobrenome" value="<?= $user->lastname ?>">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com"
            value="<?= $user->email ?>">
    </div>


    <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>