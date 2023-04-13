<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        wp_head();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/portifólio/style.css">
</head>
<body>
    <header class="container-xxl d-flex align-items-center">
        <nav class="navbar w-100 d-flex justify-content-between">
            <ul class="nav-links d-flex list-unstyled text-light m-0">
                <li><a href="/wordpress/"><p class="m-0 px-5">HOME</p></a></li>
                <li><a href="/wordpress/sobre"><p class="m-0 px-5">SOBRE MIM</p></a></li>
                <li><a href="/wordpress/habilidades"><p class="m-0 px-5">HABILIDADES</p></a></li>
                <li><a href="/wordpress/servicos"><p class="m-0 px-5">SERVIÇOS</p></a></li>
                <li><a href="/wordpress/projetos"><p class="m-0 px-5">PROJETOS</p></a></li>
            </ul>
            <div class="nav-buttons d-flex align-items-center gap-4 pe-5">
                <a href="/"><i class="bi bi-github"></i></a>
                <button>BAIXAR CV</button>
            </div>
        </nav>
    </header>