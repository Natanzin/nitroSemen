<h1>Cadastrar Forma da Entrega</h1>
<form action="?page=salvar-formaEntrega" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Descrição da Forma de Entrega*</label>
        <input required type="text" name="desc_produto" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="">Rota de Nitrogênio</label>
        <select required class="form-select" name="id_tipoProduto">
            <option value="">Nenhuma!</option>
            <?php
            $query = $conn->query("SELECT * FROM rota_nitrogenio ");
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