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
                                <li><a class="dropdown-item text-primary" href="Fotografias.php">Fotografias</a></li>
                                <li><a class="dropdown-item text-primary" href="enventos.php">Enventos</a></li>
                                <li><a class="dropdown-item text-primary" href="videos.php">Vídeos</a></li> 
                                <li><a class="dropdown-item text-primary" href="zvlboys.php">Zvlboys</a></li>
                                <li><a class="dropdown-item text-primary" href="vvmblog.php">VVM Blog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary disabled" href="contacto.php" tabindex="-1" aria-disabled="true">Contactos</a>
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
        <!-- Contact Section-->
        <section class="page-section bg-black" id="contact">
            <div class="container"> 
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacte-Nos</h2>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6 mx-auto text-center">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <div class="card" >
                            <div class="card-body" style="
                                background: linear-gradient(
                                    10deg,
                                    rgba(40, 300, 120, 0.7),
                                    rgba(40, 18, 250, 0.7) 100%
                                );  
                                ">
                                <form method="POST" action="../Metodos/contacto_script.php" id="contactForm" autocomplete="off" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="nome" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Nome Completo</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Escreva o seu Nome.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="nome@example.com" data-sb-validations="required,email" />
                                        <label for="email">Seu Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Escreva o seu email.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email inválido.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="telefone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Numero de Telefone</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Escreva o Numero do seu Telefone</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="mensagem" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Mensagem</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Escreva a Mensagem.</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <button class="btn btn-primary btn-xl" value="enviar" id="submitButton" type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                        <br>
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
                                <div class="small text-black-50">Maputo-Marracuene-Bairro Kumbeza</div>
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
                    <a class="mx-2" href="#!"><i class="fab fa-youtube"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
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
