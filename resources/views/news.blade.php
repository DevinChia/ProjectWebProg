<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            height: 100%;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-img-top {
            height: 180px;
            object-fit: cover; /* Ensures uniform scaling for images */
        }
        .card-body {
            display: flex;
            flex-direction: column;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #113826;
        }
        .card-text {
            color: #555;
            font-size: 0.9rem;
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
    <div class="container my-5">
        <h1 class="mb-4 text-center">Latest Nutrition News</h1>
        <div class="row">
            <!-- Fiber News -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://cdn.healthnwell.com/healthnwell/wp-content/uploads/2018/04/7289d667-3d94-4da4-9a18-29fdbedbad15.jpg" class="card-img-top" alt="Fiber News">
                    <div class="card-body">
                        <h5 class="card-title">Fiber: The Unsung Hero of Nutrition</h5>
                        <p class="card-text">Discover the importance of fiber for your digestive and overall health.</p>
                        <a href="{{ route('fiberDetails') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Antioxidants News -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://wallpaperaccess.com/full/1189666.jpg" class="card-img-top" alt="Antioxidants News">
                    <div class="card-body">
                        <h5 class="card-title">Antioxidants: Fighting Free Radicals</h5>
                        <p class="card-text">Learn how antioxidants protect your cells from damage and promote health.</p>
                        <a href="{{ route('antioxidantsDetails') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Fats News -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://i.pinimg.com/originals/ad/d7/21/add721a7e63ed7f93765f805fafa4d85.jpg" class="card-img-top" alt="Fats News">
                    <div class="card-body">
                        <h5 class="card-title">Healthy Fats: A Nutritional Necessity</h5>
                        <p class="card-text">Explore the role of healthy fats in supporting brain and heart health.</p>
                        <a href="{{ route('fatsDetails') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Generic Article Example -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://th.bing.com/th/id/OIP.BBx91qHXEnfLLvX9y-_YfgHaE8?w=639&h=426&rs=1&pid=ImgDetMain" class="card-img-top" alt="General Nutrition News">
                    <div class="card-body">
                        <h5 class="card-title">The Impact of a Balanced Diet</h5>
                        <p class="card-text">Discover how maintaining a balanced diet improves energy and immunity.</p>
                        <a href="{{ route('balancesDetails') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://static.toiimg.com/photo/93254064.cms" class="card-img-top" alt="General Nutrition News">
                    <div class="card-body">
                        <h5 class="card-title">Boosting Immunity with Fruits</h5>
                        <p class="card-text">Find out which fruits can help strengthen your immune system.</p>
                        <a href="{{ route('boostsDetails') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://th.bing.com/th/id/R.770951e9ba3a7c8f064445697b388a41?rik=FRKQPUANsFA4wQ&riu=http%3a%2f%2fartimg.gympik.com%2farticles%2fwp-content%2fuploads%2f2018%2f08%2fshutterstock_1114851971.jpg&ehk=wwuPuqbd7gNOEiJl0WJr3gVQyIZh15BGR8z%2f6ox0zlY%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="General Nutrition News">
                    <div class="card-body">
                        <h5 class="card-title">Being Healthy By Working Out</h5>
                        <p class="card-text">As a healthy body keeps a healthy life and find out what kind of workout that can help us.</p>
                        <a href="{{ route('workoutsDetails') }}" class="btn btn-primary">Read More</a>
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