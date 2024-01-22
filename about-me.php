<!-- about-me -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patry's web</title>
    <link rel="stylesheet" href="css/style_about-me.css">
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

<body style="background-image: url('img/fondo2.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
    <header class="bg-image" style="background-image: url('img/draw1.png');background-size: 25%; background-repeat: no-repeat; background-position: bottom left; height: 700px;">
        <!-- <div class="header2" style="background-image: url('img/circulo.png');background-size: 15%; background-repeat: no-repeat; background-position: center 50px; padding-top: 5px;">
                <div id="nombre-web" >
                <h1><span class="nombre">Patr&iacute;cia</span>
                <br>
                <span class="apellidos">D&iacute;az-Oll&eacute;</span></h1>
            </div> -->
        <div class="logo "><a href="index.php"><img class="logo-img mx-auto d-block" src="img/Nom títol.png"></a></div>
        <br>
        <div class="cabecera" style="font-size: 120%;">

            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active bg-danger" aria-current="page" href="about-me.php">· about me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php">· portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="fanart.php">· fanart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">· other projects

                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Estacions de l'oblit</a></li>
                        <li><a class="dropdown-item" href="#">project B</a></li>
                    </ul>
                </li>

            </ul>

        </div>



    </header>
    <content>
        <!-- CURSOR CUSTOMIZADO -->
        <div class="custom-cursor"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

        <!-- CONTENT -->
        <div class="description0" style="background-image: url('img/draw2.png');background-size: 40%; background-repeat: no-repeat; background-position: bottom right 5%; height: 550px;">
            <div class="description" style="background-image: url('img/hexagono-alargado.png');
                background-size: 50%;
                background-repeat: no-repeat;
                background-position: center;">
                <p>Illustrator and character designar based in Barcelona.<br>Interested on working in animation preproduction and young adult ilustration. <br> Feel free to contact me!
                </p>
            </div>
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
    <footer class="footer mt-auto py-3">
        <div class="row">
            <div class="col-2">
                <!-- One of three columns -->
            </div>

            <div class="col-8 d-inline-flex justify-content-center">
                <!-- contact images -->
                <div class="contact">
                    <a class="btn" role="button" title="instagram" href="https://www.instagram.com/diaz_olle.art/"><img src="img/insta-logo.png"></a>

                    <a class="btn" role="button" title="tiktok" href="https://www.tiktok.com/@patry.art"><img src="img/tiktok-logo.png"></a>

                    <!-- <p> -->
                    <a class="btn " data-bs-toggle="collapse" href="#collapse" title="contact us" role="button" aria-expanded="false" aria-controls="collapse">
                        <img src="img/mail-logo.png">
                    </a>

                    <!-- </p> -->
                </div>


            </div>
            <div class="col-2">
                <!-- One of three columns -->
            </div>
        </div>
    </footer>

    <!-- Codi JavaScript de Bootrstrap. NO BORRAR -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>