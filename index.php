<!-- PORTAFOLIO -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patry's web</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- link a bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- link al jquery del botó "ir arriba" -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="js/arriba.js"></script>
    
    <!-- link al jquery cursor customizado -->
    <script src="js/cursor.js"></script>

</head>



</head>

<body style="background-image: url('img/fondo1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
    <header>

        <div class="cabecera">
            <div class="logo"><a href="index.php"><img src="img/Nom títol.png" class="img-fluid"></a></div>
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="about-me.php">· about me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active bg-danger" href="index.php">· portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="fanart.php">· fanart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">· other projects</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="projectA.html">Estacions de l'oblit</a></li>
                        <li><a class="dropdown-item" href="#">project B</a></li>

                    </ul>
                </li>

            </ul>

        </div>

    </header>

    <!-- CONTENT -->
    <content>
        <!-- CURSOR CUSTOMIZADO -->
        <div class="custom-cursor"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

        <!-- BOTÓN ARRIBA -->
        <span class="ir-arriba"><img src="img/arrow.png"></span>


        <!-- CONTENT -->
        <div class="contenido-portafolio row " style="padding-top: 2%;">

            <div class="col-11" style="padding-left: 5%;">
                <h1>PORTAFOLIO</h1>

                <!-- GALERIA DE FOTOS EMERGENTES -->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <!-- 1ª imagen -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#imagen1" data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                            </a>
                            <div class="modal fade" id="imagen1" tabindex="-1" aria-hidden="true" aria-labelledby="label-imagen1">
                                <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=251" class="img-fluid"></div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- 2ª imagen -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#imagen2" data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                            </a>
                            <div class="modal fade" id="imagen2" tabindex="-2" aria-hidden="true" aria-labelledby="label-imagen2">
                                <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=252" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- 1ª imagen -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#imagen1" data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                            </a>
                            <div class="modal fade" id="imagen1" tabindex="-1" aria-hidden="true" aria-labelledby="label-imagen1">
                                <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=251" class="img-fluid"></div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- 2ª imagen -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#imagen2" data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                            </a>
                            <div class="modal fade" id="imagen2" tabindex="-2" aria-hidden="true" aria-labelledby="label-imagen2">
                                <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=252" class="img-fluid"></div>
                            </div>
                        </div>
                        <div class="col">
                            ´<!-- 1ª imagen -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#imagen1" data-gallery="example-gallery" class="col-sm-4">
                                <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                            </a>
                            <div class="modal fade" id="imagen1" tabindex="-1" aria-hidden="true" aria-labelledby="label-imagen1">
                                <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=251" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- 1ª imagen -->
                    <a href="" data-bs-toggle="modal" data-bs-target="#imagen1" data-gallery="example-gallery" class="col-sm-4">
                        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                    </a>
                    <div class="modal fade" id="imagen1" tabindex="-1" aria-hidden="true" aria-labelledby="label-imagen1">
                        <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=251" class="img-fluid"></div>
                    </div>

                    <!-- 2ª imagen -->
                    <a href="" data-bs-toggle="modal" data-bs-target="#imagen2" data-gallery="example-gallery" class="col-sm-4">
                        <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                    </a>
                    <div class="modal fade" id="imagen2" tabindex="-2" aria-hidden="true" aria-labelledby="label-imagen2">
                        <div class="modal-dialog"><img src="https://unsplash.it/600.jpg?image=252" class="img-fluid"></div>
                    </div>
                </div>
            </div>

            <!-- CONTACTO -->
            <?php
            include 'plantillas/rrss.php';
            ?>
            <!-- <div class="col-1">
                    <div class="btn-group-vertical position-fixed top-50 start-45 translate-middle" role="group" aria-label="Vertical button group">
                        <a type="button" class="btn" title="instagram" href="https://www.instagram.com/diaz_olle.art/"><img src="img/insta-logo.png"></a>
                        <a type="button" class="btn" title="tiktok" href="https://www.tiktok.com/@patry.art"><img  src="img/tiktok-logo.png"></a>
                        <a type="button" class="btn" data-bs-toggle="collapse" href="#collapse" title="contact us" aria-expanded="false" aria-controls="collapse"><img  src="img/mail-logo.png"></a>
                    </div>
                </div> -->


        </div>
        <!-- --------  FORM  --------------->
        <div class="collapse" id="collapse" class="d-flex justify-content-lg-center">
            <div class="card card-body">


                <form class="row g-3 needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputname" placeholder="ex: Patrícia Díaz">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="inputemail" placeholder="ex: patriciadiaz@gmal.com">
                    </div>
                    <div class="mb-3">
                        <label for="inputmessage" class="form-label">Message</label>
                        <textarea class="form-control" id="inputmessage" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit message</button>
                    </div>
                </form>

            </div>
        </div>
    </content>
    <br>
    <br>

    <!-- FOOTER -->



    <!-- Codi JavaScript de Bootrstrap. NO BORRAR -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>