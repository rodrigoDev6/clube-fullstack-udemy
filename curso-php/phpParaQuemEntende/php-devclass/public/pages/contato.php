<h1>Contato</h1>

<form action="/pages/forms/contato.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" name="name" placeholder="name">
    </div>


    <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Mensagem</label>
        <textarea class="form-control" name="message" rows="5"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>
</form>