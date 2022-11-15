<h1>Clientes</h1>
<?php

$sql = "SELECT * FROM cliente ORDER BY nome_cliente";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?php print $row->nome_cliente ?></td>
                <td><?php print $row->email_cliente ?></td>
                <td><?php print $row->fone_cliente ?></td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formCliente&id=" . $row->id_cliente . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarCliente&acao=excluir&id=" . $row->id_cliente . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>