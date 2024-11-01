
<?php
	require_once "../Metodos/conexao.php";
	$msg = "";
	if(isset($_POST['search'])){
			$artista= $_POST['busca'];
			$titulo= $_POST['busca'];
			$sql = "SELECT * FROM Lancamentos where artista Like '%$artista%'";
			$resultado = mysqli_query($con, $sql);

		}else {
			$sql = "SELECT * FROM enventos";
			$resultado = mysqli_query($con, $sql);
			
		}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VVM-Represent What You  Represent</title>
        <link rel="icon" type="image" href="../Imagens/logotipo/logo.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../Controlos/css/estilos.css" rel="stylesheet" />
        <link href="../Controlos/css/styles.css" rel="stylesheet" />
        <script src="../Controlos/js/jquery-3.2.0.min.js"></script>
        
    </head>
    <body id="page-top">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container">
                <div class="col justify-content-center">
                    <img src="../Imagens/img/logo.png" class="img-fluid rounded-start" alt="..." style="max-width: 240px;">
                    <p class="text-white">Represent What You Represent.</p>
                </div> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-primary" aria-current="" href="../index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  disabled text-primary" href="sobre.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-primary" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Conteúdo 
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-primary" href="musica.php">Música </a></li>
                                <li><a class="dropdown-item text-primary" href="loja.php">Loja VVM</a></li>
                                <li><a class="dropdown-item text-primary" href="artista.php">Artistas</a></li>
                                <li><a class="dropdown-item text-primary disabled" href="enventos.php">Enventos</a></li>
                                <li><a class="dropdown-item text-primary" href="videos.php">Vídeos</a></li> 
                                <li><a class="dropdown-item text-primary" href="zvlboys.php">Zvlboys</a></li>
                                <li><a class="dropdown-item text-primary" href="vvmblog.php">VVM Blog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary" href="contacto.php" tabindex="-1" aria-disabled="true">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="
                background: linear-gradient(
                    10deg,
                    rgba(40, 300, 120, 0.7),
                    rgba(40, 18, 250, 0.7) 100%
                );
                ">
            
            <div class="col-lg-4 ms-auto">
                <div class="container-fluid">
                    <form class="d-flex" method="POST" action="inscritos.php">
                        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Procurar</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">VVM Enventos 2023</h1>
                    <p class="lead fw-normal text-white-50 mb-0">O Universo da nossa cultura.</p>
                </div>
            </div>
        </header>
        <!-- Enventos-->
        <section class="projects-section bg-primary" id="Enventos">
                <?php
                  if (isset($_SESSION['msg'])) {
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                  } 

                  if (isset($_SESSION['msgcad'])) {
                  echo $_SESSION['msgcad'];
                  unset($_SESSION['msgcad']);
                  } 
                ?>
            <div class="container px-4 px-lg-5">
                <div class="card bg-black">
                    <div class="text-primary bg-dark text-center text-lg-left">
                        <h4>Próximo Envento/Show</h4>
                    </div>
                        <?php 
                            $sql = "SELECT * FROM enventos WHERE id='2'";
                            $resultado = mysqli_query($con, $sql);
                            while ($linhas = mysqli_fetch_assoc($resultado)) {
                        ?>
                    <div class="card-body bg-black">
                        <!-- Featured Project Row-->
                        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                            <div class="col-xl-4 col-lg-5"><img class="img-fluid mb-3 mb-lg-0" src="<?php echo "../Imagens/eventos/". $linhas["image0"]; ?>" alt="..." /></div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="featured-text text-center text-lg-left">
                                    <h4 class="text-white"><?php echo $linhas["titulo_envento"]; ?></h4>
                                    <p class="mb-0 text-white-50"><?php echo $linhas["descricao"]; ?></p>
                                    <h4 class="text-white"><?php echo $linhas["local_evento"]; ?></h4>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-white">Inicio</h4>
                                            <p class="text-white"><?php echo $linhas["inicio"]; ?></p>
                                        </div>  
                                        <div class="col">
                                            <h4 class="text-white">Fim</h4>
                                            <p class="text-white"><?php echo $linhas["fim"]; ?></p>
                                        </div>    
                                    </div>
                                    <div class="card bg-dark" style="border-radius: 30px;">
                                        <a href="bilhetes.html" class="btn btn-outline-primary" style="border-radius: 30px;">
                                            BILHETES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?> 
                    </div>
                </div>   
            </div>
        </section>
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
        <script src="../Controlos/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
