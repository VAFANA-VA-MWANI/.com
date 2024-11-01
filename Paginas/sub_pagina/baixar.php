
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VVM-Represent What You  Represent</title>
        <link rel="icon" type="image" href="../../Imagens/logotipo/logo.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../Controlos/css/estilos.css" rel="stylesheet" />
        <link href="../../Controlos/css/styles.css" rel="stylesheet" />
        <script src="../../Controlos/js/jquery-3.2.0.min.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container">
                <div class="col justify-content-center">
                    <img src="../../Imagens/img/logo.png" class="img-fluid rounded-start" alt="..." style="max-width: 240px;">
                    <p class="text-white">Represent What You Represent.</p>
                </div> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-primary" aria-current="" href="../../index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="../sobre.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-primary" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Conteúdo 
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-primary" href="../musica.php">Música </a></li>
                                <li><a class="dropdown-item text-primary" href="../loja.php">Loja VVM</a></li>
                                <li><a class="dropdown-item text-primary" href="../artista.php">Artistas</a></li>
                                <li><a class="dropdown-item text-primary" href="../enventos.php">Enventos</a></li>
                                <li><a class="dropdown-item text-primary" href="../videos.php">Vídeos</a></li> 
                                <li><a class="dropdown-item text-primary" href="../zvlboys.php">Zvlboys</a></li>
                                <li><a class="dropdown-item text-primary disabled" href="../vvmblog.php">VVM Blog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary" href="../contacto.php" tabindex="-1" aria-disabled="true">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="
                background: linear-gradient(
                    10deg,
                    rgba(40, 300, 120, 0.7),
                    rgba(40, 18, 250, 0.7) 100%
                );
                ">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-black"><a href="../index.php">Início/</a></li>
                    <li class="breadcrumb-item"><a href="#">Conteúdo/</a></li>
                    <li class="breadcrumb-item"><a href="#">Música/</a></li>
                    <li class="breadcrumb-item"><a href="#">Baixar/</a></li>
                </ol>
                </nav>
                <form class="d-flex" method="POST" action="inscritos.php">
                    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-dark disabled" type="submit">Procurar</button>
                </form>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <div class="card bg-primary">
                        <div class="card-body bg-light justify-content-center">
                            <?php
                                include_once '../../Metodos/conexao.php';


								$sql = "SELECT titulo_pub, image, text, artista, titulo, mediafire, SoundCloud, Youtubemusic
                                FROM lancamentos
                                WHERE id =:id
                                /*AND situacao_id = 100*/
                                ORDER BY id DESC
                                LIMIT 1";
							?>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1  text-center">
                                    <?php 
                                        // Incluir o arquivo com conexao
                                        include_once '../../Metodos/conexao.php';
                                        echo $_GET['titulo_pub'] 
                                    ?>
                                </h1>
                                <!-- Post meta content-->
                                <div class=" justify-content-center">
                                    <div class="text-muted  text-center fst-italic mb-2">
                                </div>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-5  text-center"><img class="img-fluid rounded" 
                                src="<?php 
                                        // Incluir o arquivo com conexao
                                        include_once '../../Metodos/conexao.php';
                                        echo "../../MyAdmin/Lancamentos/". $linhas["image"]; 
                                    ?>"/>
                            </figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">
                                    <?php 
                                        // Incluir o arquivo com conexao
                                        include_once '../../Metodos/conexao.php';
                                        echo $_GET['id']
                                    ?>
                                </p>
                                <p class="fs-5 mb-4"></p>
                                <p class="fs-5 mb-4"></p>
                                <h2 class="fw-bolder mb-4 mt-5"></h2>
                                <p class="fs-5 mb-4"></p>
                                <p class="fs-5 mb-4"></p>
                            </section>
                            <section class="mb-5 text-center">
                                <p class="fs-5 mb-4 text-black text-center">Partilhe</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-outline-light bg-dark text-center btn-social mx-1" href="https://web.facebook.com/dbimbe/"><i class="fab fa-fw fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light bg-dark text-center btn-social mx-1" href="https://www.youtube.com/channel/UCOycob2JYVdARrU45z4dYCg"><i class="fab fa-fw fa-gmail"></i></a>
                                    <a class="btn btn-outline-light bg-dark text-center btn-social mx-1" href="https://www.instagram.com/d_cry_vvm/"><i class="fab fa-fw fa-instagram"></i></a>
                                </div>
                            </section>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <!-- Contactos-->
        <section class="signup-section" id="Contactos">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white text-center"></i>
                        <h2 class="text-white mb-5">Inscreva-te e receba actualizações!</h2>
                        <div class="card">
                            <div class="card-body" style="
                                    background: linear-gradient(
                                        10deg,
                                        rgba(40, 300, 120, 0.7),
                                        rgba(40, 18, 250, 0.7) 100%
                                    );  
                                    ">
                                <form action="../Metodos/processalogin.php" method="POST">
                                    <div class="col">
                                        <input class="form-control" type="email" placeholder="Email..." aria-label="#" data-sb-validations="required,email" />
                                        <br>
                                        <input class="form-control" type="password"   placeholder="Senha..."/>
                                    </div>
                                    <br>
                                    <button name="notificar" type="submit" class="btn btn-info">NOTIFIQUE-ME</button>
                                    <br>
                                </form>
                            </div> 
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Localização</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Maputo-Marracuene-Bairro Santa Isabel</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">delciocasimiro@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telefone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+258 (842/875) 578-376</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-soundcloud"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-spotify"></i></a>
                    <a class="mx-2" href="https://www.youtube.com/channel/UCOycob2JYVdARrU45z4dYCg"><i class="fab fa-youtube"></i></a>
                    <a class="mx-2" href="https://web.facebook.com/dbimbe/"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/d_cry_vvm/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Vafana Va Mwani 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="../../Controlos/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
    </body>
</html>