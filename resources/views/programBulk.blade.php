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
            overflow-x: hidden;
            /* background: linear-gradient(#113826 5%,#A1A5A6 90%); */
        }

        .hl{ /* horizontal Line */
            border-top: 1px solid gray;
            opacity: 30%;
            height: 20px;
        }

        .hl-header{ /* horizontal Line */
            position: relative;
            left:35%;
            /* transform: translateX(-50%); */
            

            border-top: 3px solid gray;
            opacity: 30%;
            height: 20px;

            max-width: 100%;

            overflow: hidden;
        }

        .header-container {
            margin-top: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;

            max-width: 100%;
            width: 100%;
            height: auto;
            
        }

        .image-header {
            width: 80%;
            height: 400px;
            border-radius: 10px;
        }

        .text-header{
            position: absolute;
            top: 55%;
            left: 73%;
            
            text-align: center;
        }

        .DietText{
            font-size: 30px;
            font-weight: bold;
            color: white;
        }

        .content-container{
            margin: 15px;
            margin-left:10%;
            margin-right:10%;

            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .image-content{
            width: 300px;
            height: auto;
            border-radius: 20px;
        }

        .gap{
            margin: 30px
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

    <div class="header-container" style="max-widht: 100%;">
        <img src="{{URL('image/HeaderProgram.jpg')}}" alt="" class= "image-header" style="">
        <div class="text-header">
            <h1 style="" class="DietText">Time to Sweat</h1>
        </div>
    </div>

    <div class="hl-header"></div>

    <div class="content-container">
        <div class="left-content">
            <img src="{{URL('image\image1.jpg')}}" alt="" class="image-content">
        </div>

        <div class="gap"></div>

        <div class="right-content">
            <h1>Bulking Program</h1>
            <p> Bulking program is a great program for beginners. It is a 4-week program that will help you get started on your fitness journey. The program includes a mix of cardio and strength training exercises that will help you build muscle and burn fat. The program is designed to be challenging but achievable, so you can see results without feeling overwhelmed. </p>
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
