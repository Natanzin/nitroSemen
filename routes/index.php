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
                    <li><a class="dropdown-item" href="#">Cadastrar Clientes</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=vendedor">Gerenciar Vendedores</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Vendedores</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Gerenciar Usuário</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Usuário</a></li>
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
                    <li><a class="dropdown-item" href="#">Cadastrar Produtos</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=formaEntrega">Gerenciar Forma de Entrega</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Forma de Entrega</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=raca">Gerenciar Raça</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Raça</a></li>
                </ul>
            </div>

            <div class="dropdown me-3">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Rotas de Nitrogênio
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="?page=planejamento">Gerenciar Planejameto</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Planejamento</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?page=rota">Gerenciar Rotas</a></li>
                    <li><a class="dropdown-item" href="#">Cadastrar Rotas</a></li>
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
                        include("");
                        break;
                        //vendedor
                    case "vendedor":
                        include("./modules/src/vendedor/index.php");
                        break;
                    case "formVendedor":
                        include("");
                        break;
                        //usuario
                    case "usuario":
                        include("./modules/src/usuario/index.php");
                        break;
                    case "formUsuario":
                        include("");
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
                        include("");
                        break;
                        //forma de entrega
                    case "formaEntrega":
                        include("./modules/src/formaEntrega/index.php");
                        break;
                    case "formFormaEntrega":
                        include("");
                        break;
                        //raca
                    case "raca":
                        include("./modules/src/raca/index.php");
                        break;
                    case "formRaca":
                        include("");
                        break;
                        //planejamento
                    case "planejamento":
                        include("./modules/src/planejamento/index.php");
                        break;
                    case "formPlanejamento":
                        include("");
                        break;
                        //rota
                    case "rota":
                        include("./modules/src/rota/index.php");
                        break;
                    case "formRota":
                        include("");
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