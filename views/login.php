<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Los Camaroncitos</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="config/estilos.css">

    <!--CDN de font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="icon" href="../img/logoColegio.jpg">

</head>

<body>

    <div class="container">
            <div class="row m-5 no-gutters shadow-lg" style="transform:translateY(20%);">
                <div class="col-md-6 d-none d-md-block p-3">
                    <img src="../img/logoColegio.jpg" width="350px;" class="img-fluid" style="min-height:100%; border-radius:10%;" />
                </div>
                <div class="col-md-6 bg-white p-5 mt-5">
                    <h3 class="pb-3">Iniciar sesión</h3>
                    <div>
                        <form action="index.php?c=usuario&a=sesion" method="POST" autocomplete="off">
                            <div class="form-group pb-3">
                                <input type="email" placeholder="Correo Electrónico" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group pb-3">
                                <input type="password" placeholder="Contraseña" class="form-control" name="pass" id="exampleInputPassword1" required>
                            </div>

                            <div class="pb-2">
                                <button type="submit" name="ingresar" class="btn w-100 font-weight-bold mt-2 text-white" style="background : rgb(20, 36, 128 );">Ingresar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>