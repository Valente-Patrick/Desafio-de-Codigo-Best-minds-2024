<h1>Cadastrar Produtos</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="
        form-control">   
    </div>
    <div class="mb-3">
        <label>Código</label>
        <input type="text" name="codigo" class="
        form-control">   
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="
        form-control">   
    </div>
    <div class="mb-3">
        <label>Preço</label>
        <input type="text" name="preco" class="
        form-control">   
    </div>
    <div class="mb-3">
        <button type="submit" class="btn
        btn-primary">Enviar</button>
    </div>
</form>