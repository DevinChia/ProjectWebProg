<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Programs</title>
    
    <link rel="icon" href="/image/justLogo.png">
    <style>
        *{
            font-family: Roboto Slab;
            margin: 0; 
            padding: 0;
        }

        body{
            background: linear-gradient(#113826 5%,#A1A5A6 90%);
        }

        .gap{
            margin: 30px
        }

        .container-body{
            margin-top: 30px;
            margin-bottom: 30px;

            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .header-container{
            position: relative;
        }

        .image-header{
            margin-top: 20px;
            
            opacity: 1;

            display: block;
            justify-content: center;
            width:80%;
            max-height: 500px;
            margin-left: 10%;
            transition: .5s ease;
            
            /* backface-visibility: hidden; */

            border-radius:10%
        }

        .text-header{
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .header-container:hover .image-header{
            opacity: 0.3;
            filter: blur(3px);
        }

        .header-container:hover .text-header{
            opacity: 1;
        }

        .DietText {
            /* background-color: #04AA6D; */
            color: white;
            font-size: 100%;
            padding: 16px 32px;
        }

        .card{
            border: none;
        }

        .hl{ /* horizontal Line */
            border-top: 1px solid gray;
            opacity: 30%;
            height: 20px;
        }

        .btn-primary{
            --bs-btn-bg: #198754;
            --bs-btn-border-color: #198754;
            --bs-btn-hover-border-color: #198754;
            --bs-btn-hover-bg: white;
        }

        .btn:hover{
            color:#198754;
        }

        .sign-list{
            text-align: left;
        }

        .card{
            position: relative;
            left: 0px;
        }

        .card-carousel{
            display: flex;
            justify-content: center;
            gap: 20px;

            margin-top: 20px;
            margin-bottom: 20px;
        }

        .card:not(:first-child){
            margin-left:-50px;
        }

        .card:hover{
            transform: translateY(-20px);
            transition-duration: 0.5s;
        }

        .card:hover ~ .card{
            /* left: 20px; */
            transition-duration: 0.5s;
            

        }

        .text-card{
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .card:hover .text-card{
            opacity: 1;
        }

        .card:hover .card-content{
            transition-duration: 0.5s;
            opacity: 0.5;
            filter: blur(3px);
            transition-timing-function: ease-out;
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

    <div class="header-container">
        <img src="{{URL('image/Skinny&Fat.png')}}" alt="" class= "image-header">
        <div class="text-header">
            <h1 style="" class="DietText">Diet Program</h1>
        </div>
    </div>
    

    <div class="container-body">
        <div class="card text-center">
            <div class="card-header" style="background-color:rgb(25, 87, 58); color: white;">
                Bulking
            </div>
            <div class="card-body" style=" max-width: 600px;">
                <h5 class="card-title">What is Bulking?</h5>
                <p class="card-text"> 
                Bulking is when you eat more calories than you burn to gain muscle mass, often leading to some fat gain. It focuses on intense weight training and a high-calorie, protein-rich diet.</p>
                
                <div class="hl"></div>
                
                <h5 class="card-title">5 Sign u need to start Bulking </h5>
                <ul class="sign-list">
                    <li> You are underweight or have a low body fat percentage</li>
                    <li> You are struggling to gain muscle mass</li>
                    <li> You want to increase strength but aren’t making progress.</li>
                    <li> You have a fast metabolism that makes gaining weight difficult.</li>
                    <li> You have bodybuilding or muscle-building goals.</li>
                </ul>
                
                <div class="hl"></div>
                
                <a href="{{ route('programBulk') }}" class="btn btn-primary">Begin your Journey</a>
            </div>
        </div>

        <div class="gap"></div>

        <div class="card text-center">
            <div class="card-header" style="background-color:rgb(25, 87, 58); color: white;">
                Cutting
            </div>
            <div class="card-body" style=" max-width: 600px;">
                <h5 class="card-title">What Is Cutting? </h5>
                <p class="card-text">Cutting is when you reduce calorie intake to lose body fat while preserving muscle. This phase typically includes strength training, a high-protein diet, and more cardio to achieve a leaner physique.</p>
                
                <div class="hl"></div>
                
                <h5 class="card-title">5 Sign u need to start Cutting </h5>
                <ul class="sign-list">
                    <li>You are carrying excess body fat</li>
                    <li>You want to improve muscle definition</li>
                    <li>Your current weight or body composition is affecting your health</li>
                    <li>You want to enhance athletic performance</li>
                    <li>You’re preparing for a competition or event</li>
                </ul>
                
                <div class="hl"></div>

                <a href="{{ route('programCutt') }}" class="btn btn-primary">Begin your Journey</a>
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
