<?php
session_start();
require_once"src/app/Classes/Idioma.php";

if (!isset($_GET['lang'])) {
	if (isset($_SESSION['lang'])) {
		$lang = $_SESSION['lang'];
	} else {
		$_SESSION['lang'] = 'pt';
		$lang = $_SESSION['lang'];
	}
}
else if($_GET['lang'] != "pt" && $_GET['lang'] != "en" && $_GET['lang'] != "es"){
    $_SESSION['lang'] = 'pt';
	$lang = $_SESSION['lang'];
}
else {
	$_SESSION['lang'] = $_GET['lang'];
	$lang = $_SESSION['lang'];
}


$idioma = new Idioma($lang);

$langPag = $idioma->langPag($pagina);
foreach ($langPag as $item) {
	$val = $item['apelido'];
	$$val = $item[$lang];
}

$langMenu = $idioma->langMenu("menu");
foreach ($langMenu as $item) {
	$val = $item['apelido'];
	$$val = $item[$lang];
}

$langRodape = $idioma->langRodape("rodape");
foreach ($langRodape as $item) {
	$val = $item['apelido'];
	$$val = $item[$lang];
}
?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- CSS MENU -->
<link rel="stylesheet" href="src/app/assets/css/includes/menu.css">

<!-- CSS FOOTER -->
<link rel="stylesheet" href="src/app/assets/css/includes/footer.css">


<nav class="navbar navbar-expand-lg py-0 my-0 fixed-top container-menu">
    <a class="navbar-brand pl-lg-5" href="home.php">
        <img src="src/app/assets/img/includes/menu/logo.svg" height="40px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav options-menu mr-auto">
            <li class="mx-4 py-4" id="li-printer">
                <a class="btn-option" id="btn-printer" href="#">Impressoras</a>
            </li>
            <li class="mx-4 py-4" id="li-accessory">
                <a class="btn-option" id="btn-accessory" href="#">Acessorios</a>
            </li>
            <li class="mx-4 py-4" id="li-application">
                <a class="btn-option" id="btn-application" href="#">Aplicacoes</a>
            </li>
            <li class="mx-4 py-4" id="li-contact">
                <a class="btn-option" id="btn-contact" href="contato.php">Contato</a>
            </li>
        </ul>
        <div class="my-lg-0 pr-lg-5">
            <ul class="navbar-nav mr-auto">
                <li class="py-4">
                    <a class="p-3" id="btn-faq" href="faq.php">FAQ</a>
                </li>

                <?php 
                    if(isset($_SESSION["cliente"])){?>
                <div class="dropdown py-4 mx-4">
                    <span id="btn-portal-cliente" class="dropdown-toggle" data-toggle="dropdown">
                        <?= $_SESSION["cliente"]["nome"] ?>
                        <span class="caret"></span>
                    </span>
                    <ul id="dropdown-cliente" class="dropdown-menu">
                        <li><a href="portalcliente.php" class="option-cliente">Perfil</a></li>
                        <hr>
                        <li><a href="src/commands/logout.php?pag=<?=$pagina?>" class="option-cliente">Sair</a></li>
                    </ul>
                </div>
                <?php } else{?>
                <li class="py-4 mx-4">
                    <span id="btn-portal-cliente">Portal do cliente</span>
                </li>
                <div id="login-cliente">
                    <div id="seta-login"></div>
                    <form action="src/app/controllers/clienteController.php" method="post">
                        <input type="hidden" name="tipo" value="login">
                        <input type="email" name="email" placeholder="E-mail" required><br>
                        <input type="password" name="senha" placeholder="Senha" required><br>

                        <button id="btn-entrar" type="submit" class="mt-3">Entrar</button><br>
                        <button id="btn-cadastrar" type="button" class="mt-1">Cadastre-se</button>
                    </form>
                </div>
                <?php } ?>
                <!-- <li class="py-4">
                    <span id="btn-language">Idioma <i class="fas fa-sort-down"></i></span>
                </li> -->

                <?php if(isset($_SESSION["god"])){?>
                <li class="nav-item dropdown py-3 ml-4">
                    <a class="nav-link dropdown-toggle btn btn-danger" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modo Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="src/commands/logout.php?pag=<?=$pagina?>">Sair</a>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div id="panel">
    <div class="menu-containers py-30px" id="container-printer">
        <div class="px-5">
            <div class="row">
                <div class="col-6 text-center">
                    <a class="zoomMenuPrinter" href="impressora3d_e1260t.php">
                        <img src="src/app/assets/img/includes/menu/e1260tmenu.png" style="max-height: 250px;">
                    </a>
                    <a class="link-printer mt-2" href="impressora3d_e1260t.php">E1260T</a>
                </div>
                <div class="col-6 text-center">
                    <a class="zoomMenuPrinter" href="impressora3d_coree3.php">
                        <img src="src/app/assets/img/includes/menu/coree3menu.png" style="max-height: 250px;">
                    </a>
                    <a class="link-printer mt-2" href="impressora3d_coree3.php">Core E3</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-containers" id="container-accessory">
        <div class="container-fluid pl-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-3" style="border-right: solid 1px rgba(0,0,0,.1)">
                    <div class="py-30px px-5 py-5">
                        <ul class="navbar-nav">
                            <li id="categoryAccessory-1" class="category-accessory category-accessory-active p-2 my-1">
                                Camara pos cura
                                <i id="setasAccessory-1" class="setasAccessory fas fa-chevron-right float-right"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-3" style="border-right: solid 1px rgba(0,0,0,.1)">
                    <div class="py-30px px-5 py-5">
                        <ul class="navbar-nav itens-accessory" id="itensAccessory-1">
                            <li class="item-accessory p-2 my-1"
                                onclick="window.location.href='camara-de-cura-ezycure.php'">
                                Ezy Cure
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-5 p-0 m-0">
                    <div id="fotoAccessory-1" class="h-100 fotosAccessory w-100">
                        <img src="src/app/assets/img/includes/menu/ezycure.jpg" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="menu-containers" id="container-application">
        <div class="container-fluid pl-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-3" style="border-right: solid 1px rgba(0,0,0,.1)">
                    <div class="py-30px px-5 py-5">
                        <ul class="navbar-nav">
                            <li id="categoryApplication-1"
                                class="category-application category-application-active p-2 my-1">
                                Odontologia
                                <i id="setasApplication-1"
                                    class="setasApplication fas fa-chevron-right float-right"></i>
                            </li>
                            <li id="categoryApplication-2" class="category-application p-2 my-1">
                                Engenharia <i id="setasApplication-2"
                                    class="setasApplication fas fa-chevron-right float-right"></i>
                            </li>
                            <li id="categoryApplication-3" class="category-application p-2 my-1">
                                Joalheria <i id="setasApplication-3"
                                    class="setasApplication fas fa-chevron-right float-right"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-3" style="border-right: solid 1px rgba(0,0,0,.1)">
                    <div class="py-30px px-5 py-5">
                        <ul class="navbar-nav itens-application" id="itensApplication-1">
                            <li class="item-application p-2 my-1"
                                onclick="window.location.href='http://localhost/ezy3dphp/odontologia3d.php'">
                                Odontologia
                            </li>
                        </ul>

                        <ul class="navbar-nav itens-application" id="itensApplication-2">
                            <li class="item-application p-2 my-1"
                                onclick="window.location.href='http://localhost/ezy3dphp/engenharia3d.php'">
                                Engenharia
                            </li>
                        </ul>

                        <ul class="navbar-nav itens-application" id="itensApplication-3">
                            <li class="item-application p-2 my-1"
                                onclick="window.location.href='http://localhost/ezy3dphp/joalheria3d.php'">
                                Joalheria
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-5 p-0 m-0">
                    <div id="fotoApplication-1" class="h-100 fotosApplication w-100">
                        <img src="src/app/assets/img/includes/menu/odontologia.jpg" width="100%" height="100%">
                    </div>
                    <div id="fotoApplication-2" class="h-100 fotosApplication w-100">
                        <img src="src/app/assets/img/includes/menu/engenharia.jpg" width="100%" height="100%">
                    </div>
                    <div id="fotoApplication-3" class="h-100 fotosApplication w-100">
                        <img src="src/app/assets/img/includes/menu/joalheria.jpg" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="container-language">
    <ul class="navbar-nav">
        <li id="pt" onclick="window.location.href='<?=$pagina?>.php?lang=pt'">Portugues (Brasil)</li>
        <li id="en" onclick="window.location.href='<?=$pagina?>.php?lang=en'">English</li>
        <li id="es" onclick="window.location.href='<?=$pagina?>.php?lang=es'">Spanish</li>
    </ul>
</div>






<!-- -------------------------- MENU MOBILE -->
<div class="navbar navbar-expand-xl navbar-light bg-light d-xl-none fixed-top">
    <a class="navbar-brand" href="home.php">
        <img src="src/app/assets/img/includes/menu/logo.svg" height="40px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    Impressoras 3D
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item w-100" href="impressora3d_e1260t.php">E1260T</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="impressora3d_coree3.php">Core E3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Acessorios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="camara-de-cura-ezycure.php">Ezy Cure</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Aplicacoes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="odontologia3d.php">Odontologia</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="joalheria3d.php">Joalheria</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="engenharia3d.php">Engenharia</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Idiomas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Portugues</a>
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Spanish</a>
                </div>
            </li>
        </ul>
    </div>
</div>