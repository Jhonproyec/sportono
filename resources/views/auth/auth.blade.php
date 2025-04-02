<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Sportono</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('build/assets/app-Cen9Z7Vk.css')}}">
    
</head>

<body>

    <div class="container-login">
        <div class="card-login">
            <div class="bg-image">
                <img class="logo" src="{{ asset('build/assets/img/bg-sportono.jpg') }}" alt="Logo taller Sieten Motor">
           
            </div>
            <div class="form-login p-4">
                <div class="login-header">
                    <img src="{{ asset('build/assets/img/logo.webp') }}" alt="Logo sportono">
                </div>

                <div class="login-title">Bienvenido a Sportono 👋</div>
                <div class="login-subtitle">Por favor, inicia sesión en tu cuenta</div>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label pt-4">Correo</label>
                        <input type="text" class="form-control" id="email" placeholder="Correo Electrónico" name="email">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">CONTRASEÑA</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                        <div class="forgot-password">
                            <a href="#">¿Olvidaste la contraseña?</a>
                        </div>
                    </div>
                    
                    <div class="mb-3 form-check remember-me">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Recuérdame</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-login">Ingresar</button>
                </form>        
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{asset('build/assets/app-eMHK6VFw.js')}}"></script>
</body>

</html>
