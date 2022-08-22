<h1>Cadastro de Usuarios</h1>
<?= get('message') ?>
<br>
<br>

<form action="/pages/forms/createUser.php" method="POST" role="form">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="name" class="form-control" name="name" placeholder="Primeiro Nome">
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" placeholder="Sobrenome">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
    </div>


    <div class="mb-3">
        <label for="message" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="xxxxxxxxx">
    </div>

    <button class="btn btn-primary" type="submit">Cadastrar</button>
    <a href="/" class="btn btn-danger"> Voltar</a>
</form>