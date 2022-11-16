<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="./index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <h1>NitroSemen</h1>
        </a>
        <div style="display: flex;">
            <div class="dropdown me-3">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Gestão de Pessoas
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="?page=cliente">Gerenciar Clientes</a></li>
                    <li><a class="dropdown-item" href="?page=formCliente">Cadastrar Clientes</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=vendedor">Gerenciar Vendedores</a></li>
                    <li><a class="dropdown-item" href="?page=formVendedor">Cadastrar Vendedores</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=parceiro">Gerenciar Parceiros</a></li>
                    <li><a class="dropdown-item" href="?page=formParceiro">Cadastrar Parceiros</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=usuario">Gerenciar Usuário</a></li>
                    <li><a class="dropdown-item" href="?page=formUsuario">Cadastrar Usuário</a></li>
                </ul>
            </div>
            <div class="dropdown me-3">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Gestão de Sêmen
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="?page=pedido">Gerenciar Pedidos</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Pedido</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=produto">Gerenciar Produtos</a></li>
                    <li><a class="dropdown-item" href="?page=formProduto">Cadastrar Produtos</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=formaEntrega">Gerenciar Forma de Entrega</a></li>
                    <li><a class="dropdown-item" href="?page=formFormaEntrega">Cadastrar Forma de Entrega</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=raca">Gerenciar Raça</a></li>
                    <li><a class="dropdown-item" href="?page=formRaca">Cadastrar Raça</a></li>
                </ul>
            </div>

            <div class="dropdown me-3">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Rotas de Nitrogênio
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="?page=planejamento">Gerenciar Planejameto</a></li>
                    <li><a class="dropdown-item" href="?page=formPlanejamento">Cadastrar Planejamento</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=rota">Gerenciar Rotas</a></li>
                    <li><a class="dropdown-item" href="?page=formRota">Cadastrar Rotas</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 text-end">
            <a href="" class="btn btn-warning">Logout</a>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <?php
                switch (@$_REQUEST["page"]) {
                        //cliente
                    case "cliente":
                        include("./modules/src/cliente/index.php");
                        break;
                    case "formCliente":
                        include("./modules/src/cliente/formCliente.php");
                        break;
                    case "salvarCliente":
                        include("./modules/src/cliente/salvarCliente.php");
                        break;
                        //vendedor
                    case "vendedor":
                        include("./modules/src/vendedor/index.php");
                        break;
                    case "formVendedor":
                        include("./modules/src/vendedor/formVendedor.php");
                        break;
                    case "salvarVendedor":
                        include("./modules/src/vendedor/salvarVendedor.php");
                        break;
                        //parceiro
                    case "parceiro":
                        include("./modules/src/parceiro/index.php");
                        break;
                    case "formParceiro":
                        include("./modules/src/parceiro/formParceiro.php");
                        break;
                    case "salvarParceiro":
                        include("./modules/src/parceiro/salvarParceiro.php");
                        break;
                        //usuario
                    case "usuario":
                        include("./modules/src/usuario/index.php");
                        break;
                    case "formUsuario":
                        include("./modules/src/usuario/formUsuario.php");
                        break;
                        //pedido
                    case "pedido":
                        include("./modules/src/pedido/index.php");
                        break;
                    case "formPedido":
                        include("");
                        break;
                        //produto
                    case "produto":
                        include("./modules/src/produto/index.php");
                        break;
                    case "formProduto":
                        include("./modules/src/produto/formProduto.php");
                        break;
                    case "salvarProduto":
                        include("./modules/src/produto/salvarProduto.php");
                        break;
                        //forma de entrega
                    case "formaEntrega":
                        include("./modules/src/formaEntrega/index.php");
                        break;
                    case "formFormaEntrega":
                        include("./modules/src/formaEntrega/formFormaEntrega.php");
                        break;
                    case "salvarFormaEntrega":
                        include("./modules/src/formaEntrega/salvarFormaEntrega.php");
                        break;
                        //raca
                    case "raca":
                        include("./modules/src/raca/index.php");
                        break;
                    case "formRaca":
                        include("./modules/src/raca/formRaca.php");
                        break;
                    case "salvarRaca":
                        include("./modules/src/raca/salvarRaca.php");
                        break;
                        //planejamento
                    case "planejamento":
                        include("./modules/src/planejamento/index.php");
                        break;
                    case "formPlanejamento":
                        include("./modules/src/planejamento/formPlanejamento.php");
                        break;
                        //rota
                    case "rota":
                        include("./modules/src/rota/index.php");
                        break;
                    case "formRota":
                        include("./modules/src/rota/formRota.php");
                        break;
                    case "salvarRota":
                        include("./modules/src/rota/salvarRota.php");
                        break;
                    default:
                        include("./modules/home/index.php");
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</div>