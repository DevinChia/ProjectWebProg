<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="https://gizies.vercel.app/image/justLogo.png">
    <style>
        * {
            font-family: 'Roboto Slab', sans-serif;
        }
        body {
            background-color: #f8f9fa; /* Light background for better contrast */
        }
        .navbar {
            background-color: #113826;
        }
        .navbar a {
            color: white !important;
        }
        .dropdown-menu {
            background-color: #113826;
        }
        .dropdown-menu .dropdown-item {
            color: white;
        }
        .dropdown-menu .dropdown-item:hover {
            background-color: #EB8E27;
        }
        h1 {
            color: #113826;
        }
        form {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            color: #113826;
        }
        .form-control, .form-select {
            border: 1px solid #113826;
        }
        .btn-primary {
            background-color: #113826;
            border-color: #113826;
        }
        .btn-primary:hover {
            background-color: #EB8E27;
            border-color: #EB8E27;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        footer {
            background-color: #113826;
            color: white;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg" style="background-color:#113826">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}" style="color: white;"> <img src="{{asset('/image/logo.png')}}" alt="" style="max-width: 120px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto me-3" style="font-size: 1.2rem;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}" style="color: white;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('program') }}" style="color: white;">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}" style="color: white;">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                            Tools
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #113826;">
                            <li>
                                <a class="dropdown-item" href="{{ route('calculator') }}" style="color: white" onmouseover="this.style.backgroundColor='#EB8E27'" onmouseout="this.style.backgroundColor='transparent'">Calculator</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color: white;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="max-height: 800px;">
            <div class="carousel-item active">
                <img src="https://cdn.healthnwell.com/healthnwell/wp-content/uploads/2018/04/7289d667-3d94-4da4-9a18-29fdbedbad15.jpg" class="d-block w-100" alt="Rich in Fiber" style="object-fit: cover; max-height: 400px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="font-size: 1.5rem;">
                    <h5 style="font-size: 2rem;">Rich in Fiber</h5>
                    <p>High fiber content promotes digestive health and supports a balanced diet.</p>
                    <a href="{{ route('fiberDetails') }}" class="btn btn-primary" style="background-color: #113826; border: none;">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpaperaccess.com/full/1189666.jpg" class="d-block w-100" alt="Loaded with Antioxidants" style="object-fit: cover; max-height: 400px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="font-size: 1.5rem;">
                    <h5 style="font-size: 2rem;">Loaded with Antioxidants</h5>
                    <p>Packed with antioxidants to fight free radicals and keep your body healthy.</p>
                    <a href="{{ route('antioxidantsDetails') }}" class="btn btn-primary" style="background-color: #113826; border: none;">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/ad/d7/21/add721a7e63ed7f93765f805fafa4d85.jpg" class="d-block w-100" alt="Source of Healthy Fats" style="object-fit: cover; max-height: 400px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="font-size: 1.5rem;">
                    <h5 style="font-size: 2rem;">Source of Healthy Fats</h5>
                    <p>Contains essential healthy fats that support heart health and overall well-being.</p>
                    <a href="{{ route('fatsDetails') }}" class="btn btn-primary" style="background-color: #113826; border: none;">Read More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="card h-100">
                    <img src="https://images.squarespace-cdn.com/content/v1/60b5ea9707b8d24913bd7fb7/1623655235294-0HH930PSUCW7PKGVKGYX/Nutrition+Talk+For+Corporate+Companies+Employee+Engagement.jpeg" 
                         class="card-img-top img-fluid" 
                         alt="..." 
                         style="object-fit: cover; height: 200px; width: 100%;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">Learn more about our mission to promote healthy and nutritious lifestyles.</p>
                        <a href="{{ route('about') }}" class="btn mt-auto" style="background-color: #113826; color: white;">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card h-100">
                    <img src="https://img.freepik.com/premium-photo/controlling-diabetes-carbohydrate-counting-insulin-treatment-idea-concept-history-diabetes-health_206895-1230.jpg" 
                         class="card-img-top img-fluid" 
                         alt="..." 
                         style="object-fit: cover; height: 200px; width: 100%;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Nutritional Calculator</h5>
                        <p class="card-text">Calculate your daily nutritional needs to stay healthy and fit.</p>
                        <a href="{{ route('calculator') }}" class="btn mt-auto" style="background-color: #113826; color: white;">Try It Out</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card h-100">
                    <img src="https://wallpapertag.com/wallpaper/full/c/5/9/143959-gym-wallpaper-1920x1200-for-iphone.jpg" 
                         class="card-img-top img-fluid" 
                         alt="..." 
                         style="object-fit: cover; height: 200px; width: 100%;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Diet Programs</h5>
                        <p class="card-text">Explore our diet programs designed for a variety of health goals.</p>
                        <a href="{{ route('program') }}" class="btn mt-auto" style="background-color: #113826; color: white;">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-md-start py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Gizies</h5>
                    <p>Your trusted source for health and nutrition tips, meal plans, and diet programs.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Features</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('program') }}">Programs</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="{{ route('calculator') }}">Tools</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="text-center py-3">
                <p class="mb-0">&copy; 2024 GIZIES. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
