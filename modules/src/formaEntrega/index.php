<h1>Forma de Entrega</h1>
<?php

$sql = "SELECT * FROM forma_entrega ORDER BY desc_formaEntrega";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>Descrição</th>
            <th>Rota de Nitrogênio</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?php print $row->desc_formaEntrega ?></td>
                <td>
                    <?php if($row->id_rotaNitrogenio == 0){
                        print "Nenhuma";
                    } else {
                        print $row->id_rotaNitrogenio;
                    } ?>
                </td>
                <td>
                    <button onclick=<?php print " \"location.href='?page=formFormaEntrega&id=" . $row->id_formaEntrega . "'\" " ?> class='btn btn-warning'>Editar</button>
                    <button onclick=<?php print "\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarFormaEntrega&acao=excluir&id=" . $row->id_formaEntrega . "';}else{false;}\" " ?> class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p clas="alert alert-danger">Não encontrou resultador!</p>
<?php } ?>