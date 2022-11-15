<h1>Produtos</h1>
<?php

$sql = "SELECT * FROM produto ORDER BY situacao_produto AND id_RacaProduto AND desc_produto";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>Produto</th>
            <th>Situação</th>
            <th>Raça</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?php print $row->desc_produto ?></td>
                <td><?php print $row->situacao_produto ?></td>
                <td><?php print $row->id_tipoProduto ?></td>
                <td><?php print $row->id_RacaProduto ?></td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formProduto&id=" . $row->id_produto . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarProduto&acao=excluir&id=" . $row->id_produto . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>