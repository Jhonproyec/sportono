<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar sobre Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('build/assets/app-Cen9Z7Vk.css')}}">
    
</head>

<body>
    <div id="sidebar-wrapper">
        <h3 class="text-center">
            <img class="logo" src="{{ asset('build/assets/img/logo.webp') }}" alt="Logo taller Sieten Motor">

        </h3>
        <ul class="list-unstyled">
            <a href=""><li class="fa-solid fa-users"></li> Postulantes</a>
        </ul>
    </div>

    <div class="navbar-header">
        <button type="button" class="hamburger" id="menu-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <!-- Default dropleft button -->
        <div class="dropdown">
            <span class="dropdown-toggle" id="userDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                Administrador
            </span>
            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">Cerrar Sesión <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </div>
        
    </div>

    <div class="card-content">
        <div id="page-content-wrapper">
            <div class="content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="fw-semibold mb-0">Listado Postulantes</p>
                    <input type="search" class="form-control w-auto" style="height: 35px; width: 200px;" placeholder="Buscar">
                </div>
                <div class="table-responsive">

                    <table class="table text-center">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">CV</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Juan José Lopez Perez</td>
                                <td>juan@gmail.com</td>
                                <td>58973898</td>
                                <td>Masculito</td>
                                <td>30</td>
                                <td>Madrid</td>
                                <td>Barcelona</td>
                                <td><i class="fa-solid fa-download"></i></td>
                                <td>
                                    <i class="fa-solid fa-eye" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    <i class="fa-solid fa-trash" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card p-3">
                    <div class="card-header border-bottom pb-3">


                        <img style="width: 60px" src="https://img.freepik.com/vector-gratis/joven-principe-trajes-tradicionales_1308-174397.jpg" alt="Perfil" class="profile-img">
                        <div>
                            <h5 class="mb-0">Juan Jose Perez Martinez <td><i class="fa-solid fa-download"></i></td></h5>
                            <small class="text-muted">juan@gmail.com</small>
                        </div>


                    </div>
                <div class="card-body">
                    <p><i class="fas fa-info-circle"></i> <strong>Solicitud de Empleo</strong></p>
            
                    <div class="d-flex justify-content-around">
                        <div class="left">
                            <p><strong>Fecha aplicada:</strong> 01/04/2025</p>
                            <p><strong>Teléfono:</strong> 07878787878</p>
                            <p><strong>Ciudad:</strong> Barcelona</p>
                            <p><strong>Género:</strong> Masculino</p>
                        </div>
                        <div class="right">
                            <p><strong>Tiendas de interes:</strong>Yecla, Pinoso, Elda</p>
                            <p><strong>Jornadas de interes:</strong>Jornada completa, Media jornada</p>
                            <p><strong>Provincia:</strong> Madrid</p>
                            <p><strong>Mensaje:</strong>Sin mensajes</p>
                        </div>
                    </div>

                </div>
            </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar-wrapper');
            const content = document.getElementById('page-content-wrapper');

            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                content.classList.toggle('sidebar-active');
                menuToggle.classList.toggle('sidebar-active');
            });
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="{{asset('build/assets/app-eMHK6VFw.js')}}"></script>
    
</html>
