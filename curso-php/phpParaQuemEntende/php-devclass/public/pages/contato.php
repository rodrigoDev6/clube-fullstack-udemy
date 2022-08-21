<h1>Contato</h1>
<br>
<?= get('message') ?>
<br>
<br>

<form action="/pages/forms/contato.php" method="POST" role="form">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" name="name" placeholder="Nome Completo">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="subject" class="form-label">Assunto:</label>
        <input type="subject" class="form-control" name="subject" placeholder="Assunto do contato">
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Mensagem</label>
        <textarea class="form-control" name="message" rows="5" placeholder="Descreva seu contato aqui"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>
</form>