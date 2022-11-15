<h1>Planejamento de Rota</h1>
<form action="?page=salvar-planejamento" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="data_rota">Data da Rota*</label>
        <input required type="date" id="data_rota" name="desc_racaProduto" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Rota Nitrogênio*</label>
        <select required class="form-select" name="id_tipoProduto">
            <?php
            $query = $conn->query("SELECT * FROM rota_nitrogenio ORDER BY nome_RotaNitrogenio");
            $registros = $query->fetch_all(MYSQLI_ASSOC);
            print_r($registros);

            foreach ($registros as $item) {
            ?>
                <option value="<?php echo $item['id_rotaNitrogenio'] ?>"><?php echo $item['nome_RotaNitrogenio'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>