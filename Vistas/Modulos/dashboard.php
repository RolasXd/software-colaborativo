<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/dashboard.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <img src="" alt="">
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="#"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                    </div>

                    <section class="projects">
                        <h2>Sprints</h2>
                        <div class="project-container">
                          <div class="project">
                            <h3>Sprint 1</h3>
                            <p>Descripción</p>
                            <button>Ver detalles</button>
                          </div>
                          <div class="project">
                            <h3>Sprint 2</h3>
                            <p>Descripción</p>
                            <button>Ver detalles</button>
                          </div>
                          <div class="project">
                            <h3>Sprint 3</h3>
                            <p>Descripción </p>
                            <button>Ver detalles</button>
                          </div>
                        </div>
                      
                        <h2>Tareas</h2>
                        <div class="task-container">
                          <div class="task">
                            <h3>Tarea 1</h3>
                            <p>Descripción de la tarea</p>
                            <button>Ver detalles</button>
                          </div>
                          <div class="task">
                            <h3>Tarea 2</h3>
                            <p>Descripción de la tarea</p>
                            <button>Ver detalles</button>
                          </div>
                          <div class="task">
                            <h3>Tarea 3</h3>
                            <p>Descripción de la tarea</p>
                            <button>Ver detalles</button>
                          </div>
                        </div>
                      </section>

                </div>

            </main>
        </div>
    </div>
       





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>