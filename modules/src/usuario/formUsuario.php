<h1>Cadastrar Usuário</h1>
<form action="?page=salvar-usuario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome de Usuário*</label>
        <input required type="text" name="username" class="form-control">
    </div>
    <label for="">Senha*</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><></span>
        <input required type="password" name="password" class="form-control" >
    </div>
    <label for="">Confirmar Senha*</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><></span>
        <input required type="password" name="confirm_password" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="">Tipo de Usuário*</label>
        <select required class="form-select" name="tipo_usuario" aria-placeholder="Selecione uma categoria!">
            <option value="admin">Administrador</option>
            <option value="observer">Observador</option>
        </select>
    </div>
   
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>


</form>