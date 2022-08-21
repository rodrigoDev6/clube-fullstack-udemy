<h1>Bem vindo ao nosso site</h1>
<p class="h6">página: home</p>

<a href="?page=contato" class="btn btn-primary" rel="noopener noreferrer">Formulário de contato</a>
<a href="?page=createUser" class="btn btn-primary" rel="noopener noreferrer">Cadastrar usuario</a>

<hr>

<?= get('message') ?>
<br>
<br>

<h2>Tabela de usuarios</h2>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>lastname</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all('users');
        foreach ($users as $key => $user): ?>
        <tr>
            <td scope="row"><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->lastname ?></td>
            <td><?= $user->email ?></td>
            <td>
                <!--     ?page=edit_user&id=$user->id; -->
                <a href="?page=editUser&id=<?= $user->id ?>" class="btn btn-success">Editar</a>
                <a href="?page=deleteUser&id=<?= $user->id ?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php endforeach;
        ?>
    </tbody>
</table>