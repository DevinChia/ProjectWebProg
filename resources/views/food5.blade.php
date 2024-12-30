<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Recipe</title>
    
    <link rel="icon" href="/image/justLogo.png">
    <style>
        *{
            font-family: 'Roboto Slab', sans-serif;
            margin: 0; 
            padding: 0;
        }

        body{
            overflow-x: hidden;
            /* background: linear-gradient(#113826 5%,#A1A5A6 90%); */
        }

        .hl{ /* horizontal Line */
            border-top: 1px solid;
            border-color:  #113826;
            opacity: 90%;
            height: 20px;

            max-width: 80%;

            position: relative;
            left: 50%;
            transform: translateX(-50%);
            
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .hl-divider{ 
            border-top: 1px solid;
            border-color:  #113826;
            opacity: 90%;
            height: 20px;

            max-width: 70%;

            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .hl-divider-tips{ 
            border-top: 1px solid;
            border-color:  #113826;
            opacity: 90%;
            height: 20px;

            max-width: 30%;

            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .hl-right{ 
            position: relative;
            left:35%;
            
            border-top: 3px solid;
            border-color:  #113826;
            opacity: 90%;
            height: 20px;

            max-width: 100%;   
        }

        .hl-left{
            position: relative;

            border-top: 3px solid;
            border-color:hsl(152, 53.40%, 14.30%);
            opacity: 90%;
            height: 20px;

            max-width: 65%; 
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

        

        .text-header{
            position: absolute;
            top: 55vh;
            left: 150vh;
            
            text-align: center;
        }

        

        .content-container{
            margin: 15px;
            margin-left:10%;
            margin-right:10%;
            margin-bottom: 40px;

            display: flex;
            flex-direction: row;
            justify-content: center;

            
        }

        .image-content{
            position: relative;
            left: 50%;
            transform: translateX(-50%);

            width: 50vh;
            /* height: auto; */
            border-radius: 10px;
        }

        .gap{
            margin: 30px
        }

        .left-content{
            display: flex; 
            justify-content: center;

            width: 50%;
            text-align: justify;
            width:100%;
        }

        .right-content{
            width: 50%;
            text-align: justify;

            width:100%;
        }

        .text{
            font-size: 2.8vh;
        }

        .mid-content{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .head-content{
            display: flex;
            justify-content: center;
        }

        .ingredients{
            display: block;
            margin-left: 30vh;
            margin-right: 30vh;
            font-size: 2.8vh;
        }

        .instructions{
            display: block;
            margin-left: 30vh;
            margin-right: 30vh;
            font-size: 2.8vh;
        }
        
        .head-ing{
            display: flex;
            justify-content: center;
        }

        .main-ing li{
            padding-left: 3vh;
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
                                <a class="dropdown-item" href="{{ route('calculator') }}" style="color: white;" onmouseover="this.style.backgroundColor='#EB8E27'" onmouseout="this.style.backgroundColor='transparent'">Calculator</a>
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

    <div class="content-container">
        <div class="left-content" >
        <!-- <img src="{{URL('image\image1.jpg')}}" alt="" class="image-content"> -->

            <img src="{{URL('image\Menu1.jpg')}}" alt="" class="food-image card-content" style="width: 50vh">
        </div>

        <div class="gap"></div>

        <div class="right-content">
            <div class="text">
                <h1>Bulking Program</h1>
                <p> Bulking program is a great program for beginners. It is a 4-week program that will help you get started on your fitness journey. The program includes a mix of cardio and strength training exercises that will help you build muscle and burn fat. The program is designed to be challenging but achievable, so you can see results without feeling overwhelmed. </p>
            </div>
        </div>
    </div>

    <div class="hl-divider" ></div> <!-- Divider -->
    
    
    <div class="head-ing">
        <h1>Ingredients & Utensils</h1>
    </div>
    
    <div class="ingredients">
        <div class="main-ing">
            <h2>Main Components: </h2>
            <li>Chicken Breast (1 piece)</li>
            <li>Mixed Salad Greens (lettuce, spinach, etc.)</li>                
            <li>Yellow Bell Peppers (sliced)</li>
            <li>Cherry Tomatoes (halved)</li>
            <li>Purple Cabbage (shredded)</li>
            <li>Broccoli Florets (blanched or raw)</li>
            <li>Kidney Beans (1/4 cup, cooked)</li>               
            <li>Almonds (blanched or sliced, 2 tbsp)</li>
        </div>
            
            <div class="gap"></div>
            
        <div class="main-ing">
            <h2>Seasoning and Dressings: </h2>
            <li>Olive Oil (2 tbsp)</li>
            <li>Salt (to taste)</li>
            <li>Pepper (to taste)</li>
            <li>Garlic Powder (1 tsp, optional)</li>
            <li>Paprika (1/2 tsp)</li>
            <li>Lemon Juice (1 tbsp, for salad dressing)</li>                
        </div>

        <div class="gap"></div>
        
        <div class="main-ing">
            <h2>Seasoning and Dressings: </h2>
            <li>Olive Oil (2 tbsp)</li>
            <li>Salt (to taste)</li>
            <li>Pepper (to taste)</li>
            <li>Garlic Powder (1 tsp, optional)</li>
            <li>Paprika (1/2 tsp))</li>
            <li>Lemon Juice (1 tbsp, for salad dressing)</li>                
        </div>
    </div>

    <div class="hl"></div>

    <div class="head-ing">
        <h1>Instructions</h1>
    </div>

    <div class="instructions">
        <div class="main-ing">
            <ol>
                <li>Wash the chicken breast and all vegetables.</li>
                <li>Preheat the oven to 375°F (190°C).</li>
                <li>Season the chicken breast with olive oil, salt, pepper, garlic powder, and paprika.</li>
                <li>Place the chicken on a baking tray and roast it in the oven for 25–30 minutes.</li>
                <li>Cut the cherry tomatoes in half, shred the purple cabbage, slice the yellow bell peppers, and blanch the broccoli florets.</li>
                <li>Place the salad greens, cherry tomatoes, purple cabbage, yellow bell peppers, and broccoli in a bowl.</li>
                <li>Add olive oil, lemon juice, and a pinch of salt to the salad and mix well.</li>
                <li>Add the cooked kidney beans and almonds to the salad.</li>
                <li>Place the roasted chicken breast on a plate.</li>
                <li>Add the prepared salad next to the chicken and serve immediately.</li>
            </ol>
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
