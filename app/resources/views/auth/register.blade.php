<!doctype html>
<html lang="en">
<head>
    <title>Crear cuenta</title>
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
                                <h4 class="mt-1 mb-5 pb-1">REGISTRO</h4>
                            </div>
                            <form class="text-center" method="POST" action="{{ route('register') }}" style="font-family: 'Inter', sans-serif;">
                                @csrf
                                    <div class="form-outline mb-4 text-start">
                                        <label class="form-label" for="form2Example11">NOMBRES</label>
                                        <input type="text" id="form2Example11" class="form-control" name="name" placeholder="Ingrese sus nombres" />
                                    </div>

                                    <div class="form-outline mb-4 text-start">
                                        <label class="form-label" for="form2Example22">APELLIDOS</label>
                                        <input type="text" id="form2Example22" class="form-control" name = "last_name"
                                               placeholder="Ingrese sus apellidos"/>
                                    </div>
                                    <div class="form-outline mb-4 text-start">
                                        <label class="form-label" for="form2Example22">CORREO</label>
                                        <div class="row">
                                            <div class="col-9">
                                                <input type="text" id="form2Example22" class="form-control" name = "email"
                                                placeholder="nombre.apellido"/>
                                            </div>
                                            <div class="col-3 d-flex justify-content-center align-self-center">
                                                <label for="text">@unas.edu.pe</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4 text-start">
                                        <label class="form-label" for="form2Example22">CONTRASEÑA</label>
                                        <input type="password" id="form2Example22" class="form-control" name = "password"
                                               placeholder="Introduce tu contraseña"/>
                                    </div>
                                    <div class="form-check text-start">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Acepto los terminos y condiciones
                                        </label>
                                    </div>
                                    <div class="text-muted text-end">
                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg mb-3" style="background-color: #10A628;" type="submit">CREAR CUENTA</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                        <a 
                                        href="{{ route('login') }}"
                                        type="button" class="btn btn-outline-danger">Inicia sesión</a>
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
