<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" async></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark fixed-top"><!--tema dark navbar-->
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Instituto Verbena - Sala de TI</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"><!--tema dark menu-->
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">IV-TI</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Cadastrar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuários
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark"><!--tema dark dropdown-->
                            <li><a class="dropdown-item" href="/users/ativados">Ativados</a></li>
                            <li><a class="dropdown-item" href="/users/desativados">Desativados</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/users/todos">Todos</a></li>
                            </ul>
                        </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar Usuário" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
                    @if (session('msg'))
                        <div class="alert alert-success alerta" role="alert">
                            {{session('msg')}}
                        </div>
                    @endif
                    @yield('content') 
                
        </main>
        <header>
            
        </header>
        
    </body>
</html>