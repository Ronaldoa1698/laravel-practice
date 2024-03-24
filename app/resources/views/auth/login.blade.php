<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
    />
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-5">
                <div class="card rounded-3 text-black mx-auto " style="background-color: #6666;">
                <header style="background-color: #D9D9D9; padding: 20px; text-align: center; font-family: 'Inika', sans-serif; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/logo1.jpg') }}" alt="Logo" style="width: 100px; margin-top: 10px;">
                    <h1 style="margin-bottom: 0; color: #000; margin-right: 10px;">FORO UNAS</h1>
                </header>
                <div class="col-lg-100">
                        <div class="card-body p-md-5 mx-md-4" >
                            <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">INICIO DE SESIÓN</h4>
                            </div>
                                <form action="{{route('login')}}" method="post" class="text-center" style="font-family: 'Inter', sans-serif;">
                                    @csrf
                                    <p>Inicia sesión en tu cuenta</p>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">CORREO</label>
                                        <input type="text" id="form2Example11" class="form-control" name = "email"
                                               placeholder="usuario@unas.edu.pe" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">CONTRASEÑA</label>
                                        <input type="password" id="form2Example22" class="form-control" name = "password"
                                               placeholder="Introducir tu contraseña"/>
                                    </div>
                                    <div class="text-muted text-end">
                                    <a class="text-muted pt-1 mb-5 pb-1" href="#!">¿Olvidó la contraseña?</a>
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg mb-3" style="background-color: #10A628;" type="submit">INICIAR SESIÓN</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                        <a
                                        href="{{ route('register') }}"
                                        type="button" class="btn btn-outline-danger">Registrate</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
></script>
</body>
</html>
