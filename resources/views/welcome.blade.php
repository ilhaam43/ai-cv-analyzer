<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CV Analyzer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://laravel.com/docs" target="_blank">Docs</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-light py-5 border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <h1 class="display-5 fw-bold">Welcome to Laravel</h1>
                    <p class="lead text-secondary">Bootstrap 5 is wired up. Start building your UI fast.</p>
                    <a class="btn btn-primary btn-lg" href="https://getbootstrap.com" target="_blank">Bootstrap Docs</a>
                    <a class="btn btn-outline-secondary btn-lg ms-2" href="https://laravel.com/docs" target="_blank">Laravel Docs</a>
                </div>
                <div class="col-12 col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Getting Started</h5>
                            <p class="card-text">Edit this page at <code>resources/views/welcome.blade.php</code>.</p>
                            <p class="card-text">Routes live in <code>routes/web.php</code>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Blade Templates</h5>
                            <p class="card-text">Use Blade to compose pages and layouts with Bootstrap components.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Routing</h5>
                            <p class="card-text">Modify <code>web.php</code> to map URLs to views or controllers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Assets</h5>
                            <p class="card-text">Using CDN keeps setup light. Switch to Vite anytime for bundling.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Laravel + Bootstrap Starter</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDx0i9FhG8fDeYk9P1hBXQx3qZ4l0Yl9E0IvoB1zKQnB8GQ05yB6X2" crossorigin="anonymous"></script>
</body>
</html>