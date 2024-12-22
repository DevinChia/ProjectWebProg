<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <title>About Us</title>
    
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
                        <a class="nav-link active" href="{{ route('home') }}" style="color: white">Home</a>
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
                                <a class="dropdown-item" href="{{ route('calculator') }}" style="color: white;" onmouseover="this.style.backgroundColor='#EB8E27'" onmouseout="this.style.backgroundColor='transparent'">Calculator</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="display-4 text-center mb-4" 
    style="background-image: url('https://wallpapercave.com/wp/wp4696901.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; color: white; width: 100%; height:200px; display: flex; 
           justify-content: center;
           align-items: center;
           text-align: center;
           font-weight: bold;">
        About Us
    </h1>
     <main class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <p class="lead text-center mb-5 d-flex align-items-center">
                    <img src="https://northernvirginiamag.com/wp-content/uploads/2021/06/seniors.jpg" alt="Description Image" class="me-4" style="width: 750px; height: auto;">
                    Welcome to GIZIES! We are a leading platform dedicated to providing the latest insights and products in the world of nutrition.
                </p>
                <section class="mb-5">
                        <h2 class="h3 text-center">Why GIZIES is Unique</h2>
                        <p class="text-center">At GIZIES, we stand apart by combining cutting-edge nutritional science with personalized, practical solutions for every lifestyle. Our holistic approach to health and wellness, backed by expert advice and premium products, ensures that you are always supported in your journey to a healthier life.</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <i class="bi bi-person-check" style="font-size: 50px; color: #4CAF50;"></i>
                                <h5>Expert-Led Advice</h5>
                                <p>Our team of nutritionists and fitness experts provide personalized, science-backed recommendations.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="bi bi-box-seam" style="font-size: 50px; color: #4CAF50;"></i>
                                <h5>High-Quality Products</h5>
                                <p>We only offer top-tier, carefully selected supplements and products to enhance your health.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="bi bi-egg-fried" style="font-size: 50px; color: #4CAF50;"></i>
                                <h5>Tailored Meal Plans</h5>
                                <p>Receive customized meal plans that fit your specific health goals, preferences, and lifestyle.</p>
                            </div>
                        </div>
                    </section>
                <section class="mb-5">
                    <h2 class="h3">Our Story</h2>
                    <p>Founded by a team of passionate nutrition experts and fitness lovers, GIZIES began with a simple mission: to make nutrition knowledge accessible to everyone. From our humble beginnings, we've grown to become a trusted source for health and nutrition tips, personalized meal plans, and top-quality products.</p>
                </section>
                <section class="mb-5">
                    <h2 class="h3">Our Mission</h2>
                    <p>At GIZIES, our mission is to empower individuals to take control of their health through science-backed nutritional advice, healthy recipes, and high-quality supplements. We aim to help you achieve a balanced, nutritious lifestyle that fits your unique needs and goals.</p>
                </section>
                <section class="mb-5">
                    <h2 class="h3">Our Values</h2>
                    <p>We believe in transparency, quality, and community. Every product we recommend and every piece of advice we share is based on credible research and the latest nutritional science. We are committed to providing you with the tools and knowledge to make informed, healthy choices.</p>
                </section>
            </div>            
        </div>
    </main>
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
