<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Details</title>
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
        .back-button {
        background-color: #113826; /* Green color */
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 5px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: background-color 0.3s ease;
    }
    .back-button:hover {
        background-color: #113826; /* Darker green on hover */
        color: white;
    }

    .back-button i {
        margin-right: 8px; /* Spacing between the icon and text */
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
    <div class="container my-4">
        <a href="{{ route('news') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>    
    <div class="container my-5">
        <h1 class="mb-4">Being Healthy By Working Out</h1>
        <img src="https://th.bing.com/th/id/R.770951e9ba3a7c8f064445697b388a41?rik=FRKQPUANsFA4wQ&riu=http%3a%2f%2fartimg.gympik.com%2farticles%2fwp-content%2fuploads%2f2018%2f08%2fshutterstock_1114851971.jpg&ehk=wwuPuqbd7gNOEiJl0WJr3gVQyIZh15BGR8z%2f6ox0zlY%3d&risl=&pid=ImgRaw&r=0" class="img-fluid mb-4" alt="Rich in Fiber">
        <p>Regular physical activity is essential for maintaining a healthy body and mind. Exercising consistently not only helps improve fitness levels but also has profound benefits for overall health, including boosting the immune system, improving mental well-being, and reducing the risk of chronic diseases. By incorporating exercise into your daily routine, you can improve your quality of life and increase longevity.</p>
        <h2>Health Benefits of Working Out</h2>
        <ul>
            <li><strong>Improves cardiovascular health:</strong> Regular exercise strengthens the heart, improving blood circulation and lowering the risk of heart disease. Activities like running, cycling, or swimming help maintain a healthy heart by reducing high blood pressure and controlling cholesterol levels.</li>
            <li><strong>Enhances mental health:</strong> Physical activity releases endorphins, the "feel-good" hormones, which help reduce stress, anxiety, and depression. Regular exercise can also improve sleep patterns, increase energy levels, and enhance cognitive function.</li>
            <li><strong>Boosts immune function:</strong> Engaging in moderate exercise has been shown to enhance the body's immune response by promoting the production of antibodies and improving circulation. This helps the body fight off infections and reduces the duration of illnesses.</li>
            <li><strong>Supports weight management:</strong> Exercise plays a crucial role in maintaining a healthy weight. By increasing calorie burn and building muscle mass, regular workouts help prevent obesity, improve metabolism, and support sustainable weight loss.</li>
            <li><strong>Reduces the risk of chronic diseases:</strong> Regular physical activity lowers the risk of conditions like diabetes, cancer, and osteoporosis. It helps manage blood sugar levels, reduces inflammation, and strengthens bones and muscles, contributing to long-term health.</li>
        </ul>
        <p>To enjoy these benefits, aim for a balanced exercise routine that includes aerobic activities, strength training, and flexibility exercises. Whether it’s a brisk walk, a yoga session, or a weightlifting workout, staying active is one of the most effective ways to improve your health and well-being.</p>
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