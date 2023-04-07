<div class="container col-4">

    <h1> Novo Usuário</h1>

    <form action="?page=salvar" method="POST">

        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nasc" id="" class="form-control">
        </div>
        <div class="row col-3 mx-auto">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

</div>