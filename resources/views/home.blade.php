<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Home</title>

    <link rel="icon" href="/image/justLogo.png">

    <style>
        *{
            font-family: Roboto Slab;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg" style="background-color: #113826">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}" style="color: white;"> <img src="{{URL('image/logo.png')}}" alt="" style="max-width: 120px;"></a>
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
                        <a class="nav-link" href="{{ route('support') }}" style="color: white;">Support</a>
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
                <img src="https://cdn.healthnwell.com/healthnwell/wp-content/uploads/2018/04/7289d667-3d94-4da4-9a18-29fdbedbad15.jpg" class="d-block w-100" alt="..." style="object-fit: cover; max-height: 400px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="font-size: 1.5rem;">
                    <h5 style="font-size: 2rem;">Rich in Fiber</h5>
                    <p>High fiber content promotes digestive health and supports a balanced diet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpaperaccess.com/full/1189666.jpg" class="d-block w-100" alt="..." style="object-fit: cover; max-height: 400px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="font-size: 1.5rem;">
                    <h5 style="font-size: 2rem;">Loaded with Antioxidants</h5>
                    <p>Packed with antioxidants to fight free radicals and keep your body healthy.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/ad/d7/21/add721a7e63ed7f93765f805fafa4d85.jpg" class="d-block w-100" alt="..." style="object-fit: cover; max-height: 400px;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" style="font-size: 1.5rem;"">
                    <h5 style="font-size: 2rem;">Source of Healthy Fats</h5>
                    <p>Contains essential healthy fats that support heart health and overall well-being.</p>
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
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.squarespace-cdn.com/content/v1/60b5ea9707b8d24913bd7fb7/1623655235294-0HH930PSUCW7PKGVKGYX/Nutrition+Talk+For+Corporate+Companies+Employee+Engagement.jpeg" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <p class="card-text">Learn more about our mission to promote healthy and nutritious lifestyles.</p>
                    <a href="{{ route('about') }}" class="btn me-2" style="background-color: #ed553b; color: white;">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://img.freepik.com/premium-photo/controlling-diabetes-carbohydrate-counting-insulin-treatment-idea-concept-history-diabetes-health_206895-1230.jpg" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Nutritional Calculator</h5>
                    <p class="card-text">Calculate your daily nutritional needs to stay healthy and fit.</p>
                    <a href="{{ route('program') }}" class="btn me-2" style="background-color: #ed553b; color: white;">Try It Out</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://wallpapertag.com/wallpaper/full/c/5/9/143959-gym-wallpaper-1920x1200-for-iphone.jpg" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Diet Programs</h5>
                    <p class="card-text">Explore our diet programs designed for a variety of health goals.</p>
                    <a href="{{ route('support') }}" class="btn me-2" style="background-color: #ed553b; color: white;">Explore Now</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="bg-light text-center text-md-start py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Gizies</h5>
                    <p class="text-muted">Your trusted source for health and nutrition tips, meal plans, and diet programs.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Features</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-dark text-decoration-none">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-dark text-decoration-none">About Us</a></li>
                        <li><a href="{{ route('program') }}" class="text-dark text-decoration-none">Programs</a></li>
                        <li><a href="{{ route('support') }}" class="text-dark text-decoration-none">Support</a></li>
                        <li><a href="{{ route('calculator') }}" class="text-dark text-decoration-none">Tools</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <div>
                        <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center py-3">
                <p class="mb-0">&copy; 2024 GIZIES. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
