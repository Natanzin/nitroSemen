<h1>Cadastrar Produto</h1>
<form action="?page=salvarProduto" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Descrição do Produto*</label>
        <input required type="text" name="desc_produto" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Situação do Produto*</label>
        <select required class="form-select" name="situacao_produto">
            <option selected value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Tipo Produto*</label>
        <select required class="form-select" name="id_tipoProduto">
            <?php
            $query = $conn->query("SELECT * FROM tipo_produto ");
            $registros = $query->fetch_all(MYSQLI_ASSOC);
            print_r($registros);

            foreach ($registros as $item) {
            ?>
                <option value="<?php echo $item['id_tipoProduto'] ?>"><?php echo $item['desc_tipoProduto'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Raça Produto*</label>
        <select required class="form-select" name="id_RacaProduto">
            <?php
            $query2 = $conn->query("SELECT * FROM raca_produto ORDER BY desc_racaProduto ");
            $registros2 = $query2->fetch_all(MYSQLI_ASSOC);
            print_r($registros2);

            foreach ($registros2 as $item2) {
            ?>
                <option value="<?php echo $item2['id_racaProduto'] ?>"><?php echo $item2['abrev_racaProduto'] . " - " . $item2['desc_racaProduto'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>