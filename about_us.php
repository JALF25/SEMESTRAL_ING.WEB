<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTPNET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <nav class=" header navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img  src="pics/logo.jpg" alt="" height=50px width=80px></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- para cuando pase de cierto tamaño se despliegue un boton que al tocarlo brindara el restp de opciones de navegacion -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link  p-4" aria-current="page" href="index.php">home</a>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="nav-link dropdown-toggle p-3" href="#">products</a>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item nav-link px-2" href="product1.php">product</a></li>
                            <li><a class="dropdown-item nav-link px-2" href="product2.php">product</a></li>
                            <li><a class="dropdown-item nav-link px-2" href="product3.php">product</a></li>
                            <li><a class="dropdown-item nav-link px-2" href="product4.php">product</a></li>
                        </ul>
                    </div>
                    <a class="nav-link active p-4" href="about_us.php">aboutus</a>
                    <a class="nav-link p-4" href="contact_us.php">contacus</a>
                    
                </div>
                <div>
                    
                </div>
                <?php
                    session_start();
                    // Verifica las credenciales del usuario aquí (reemplaza esto con tu lógica de autenticación)
                    // if ($credenciales_validas) {
                    //     $_SESSION['nombre_de_usuario'] = $nombre_de_usuario; // Almacena el nombre de usuario en una variable de sesión
                    // }
                    if (isset($_SESSION['usuario_iniciado']) && $_SESSION['usuario_iniciado'] === true) {
                        // El usuario ha iniciado sesión, muestra contenido protegido o bienvenida
                        echo "¡Bienvenido!";
                        // Aquí colocarás el contenido protegido
                    } else {
                        // El usuario no ha iniciado sesión, muestra enlaces para iniciar sesión y registrarse
                        echo "<div class='regs container px-4 d-flex justify-content-end'>";
                        echo "<div class='grid row gx-4 gy-1'>";
                        echo " <div class='col-sm-6'> <div class='p-4 border' > <a class='nav-link' href='login.php'>login</a> </div> </div>";
                        echo " <div class='col-sm-6'> <div class='p-4 border'> <a class='nav-link' href='signin.php'>signin</a> </div> </div>";
                        echo "</div>";
                        echo "</div>";
                    }

                    // <?php
                    // session_start();
                    // if (isset($_SESSION['usuario_iniciado']) && $_SESSION['usuario_iniciado'] === true) {
                    //      El usuario ha iniciado sesión, puedes mostrar contenido protegido
                    // } else {
                    //      El usuario no ha iniciado sesión, redirige a la página de inicio de sesión
                    //     header("Location: login.php");
                    //     exit;
                    // } 
                ?>
            </div>
        </div>
    </nav>
    <main>
        
    </main>
    

    <div class="foter container">
        <footer class="">
            <div class="row">
                <div class="col-2 px-6">
                    <h5>Section</h5>
                    <div class="navbar-nav flex-column px-3 ">
                    <a class="nav-link px-3" aria-current="page" href="index.php">home</a>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="nav-link dropdown-toggle " href="#">products</a>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item nav-link px-2" href="product1.php">product</a></li>
                            <li><a class="dropdown-item nav-link px-2" href="product2.php">product</a></li>
                            <li><a class="dropdown-item nav-link px-2" href="product3.php">product</a></li>
                            <li><a class="dropdown-item nav-link px-2" href="product4.php">product</a></li>
                        </ul>
                    </div>
                    <a class="nav-link active px-3" href="about_us.php ">aboutus</a>
                    <a class="nav-link px-3" href="contact_us.php">contacus</a>
                    
                </div>
                </div>

                <div class="col-4 offset-1">
                    <?php
                    // Verifica las credenciales del usuario aquí (reemplaza esto con tu lógica de autenticación)
                    // if ($credenciales_validas) {
                    //     $_SESSION['nombre_de_usuario'] = $nombre_de_usuario; // Almacena el nombre de usuario en una variable de sesión
                    // }
                    if (isset($_SESSION['usuario_iniciado']) && $_SESSION['usuario_iniciado'] === true) {
                        // El usuario ha iniciado sesión, muestra contenido protegido o bienvenida
                        echo "¡Bienvenido!";
                        // Aquí colocarás el contenido protegido
                    } else {
                        // El usuario no ha iniciado sesión, muestra enlaces para iniciar sesión y registrarse
                        echo "<div class='regs container px-4'>";
                        echo "<div class='grid row gx-3 gy-1'>";
                        echo " <div class='col-sm-6'> <div class='p-4 border' > <a class='nav-link' href='login.php'>login</a> </div> </div>";
                        echo " <div class='col-sm-6'> <div class='p-4 border'> <a class='nav-link' href='signin.php'>signin</a> </div> </div>";
                        echo "</div>";
                        echo "</div>";
                    }

                    // <?php
                    // session_start();
                    // if (isset($_SESSION['usuario_iniciado']) && $_SESSION['usuario_iniciado'] === true) {
                    //      El usuario ha iniciado sesión, puedes mostrar contenido protegido
                    // } else {
                    //      El usuario no ha iniciado sesión, redirige a la página de inicio de sesión
                    //     header("Location: login.php");
                    //     exit;
                    // } 
                ?>
                </div>
            </div>

            <div class="d-flex justify-content-between  border-top">
            <p>© 2023 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
            </div>
        </footer>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>