<h1>Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table
            table-houver
            table-striped
            table-bordered'>";
            print "<tr>";
            print "<th>Nome do produto</th>";
            print "<th>Código do produto</th>";
            print "<th>Descrição do produto</th>";
            print "<th>Preço</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->preco."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"if(
                        confirm('Tem ceteza que deseja excluir?')){
                            location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }