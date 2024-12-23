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
            border-top: 3px solid;
            border-color:  #113826;
            opacity: 90%;
            height: 20px;

            max-width: 80%;

            position: relative;
            left: 50%;
            transform: translateX(-50%);

            padding-bottom: 20px;
        }

        .hl-divider{ 
            border-top: 1px solid;
            border-color:  #113826;
            opacity: 90%;
            height: 20px;

            max-width: 50%;

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

        .image-header {
            width: 80%;
            height: 32vw;
            border-radius: 10px;
        }

        .text-header{
            position: absolute;
            top: 55vh;
            left: 150vh;
            
            text-align: center;
        }

        .DietText{
            font-size: 2vw;
            font-weight: bold;
            color: white;
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
            left: 20px;
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
        }

        .tips-content{

            display: flex;
            justify-content: center;
            flex-direction: column;
            
            align-items: center;
            
            /* background-color: rgb(255, 239, 208); */
            /* background-color:rgba(2, 128, 69, 0.36); */
        }
        
        .body-tips{
            display: flex;
            justify-content: center;
            flex-direction: row;
            
            align-items: center;
            
            font-size: 1vw;
            text-align: center;
        }

        .accordion{

            margin: 30px;
            width: 80vh;

            --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(0, 122, 51, 0.25);
            --bs-accordion-active-bg: white;

            
        }

        .accordion-header button{
            /* background-color: rgba(0, 70, 37, 0.75); */
            font-size: 1.2vw;
        }

        .accordion-body{
            text-align: left;
        }

        .end-content{
            display: flex;
            justify-content: center;
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

    <div class="header-container" style="max-widht: 100%;">
        <img src="{{URL('image/HeaderProgram.jpg')}}" alt="" class= "image-header" style="">
        <div class="text-header">
            <h1 style="" class="DietText">Time to Sweat</h1>
        </div>
    </div>

    <!-- <div class="hl-right"></div> -->

    <div class="content-container">
        <div class="left-content">
            <!-- <img src="{{URL('image\image1.jpg')}}" alt="" class="image-content"> -->

            <iframe class="image-content"width="560" height="315" src="https://www.youtube.com/embed/be_TjNbJ75g?si=ZkiSGX8v5_uQsIrt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="gap"></div>

        <div class="right-content">
            <div class="text">
                <h1>Cutting Program</h1>
                <p> Bulking program is a great program for beginners. It is a 4-week program that will help you get started on your fitness journey. The program includes a mix of cardio and strength training exercises that will help you build muscle and burn fat. The program is designed to be challenging but achievable, so you can see results without feeling overwhelmed. </p>
            </div>
        </div>
    </div>

    <div class="hl-left"></div>
    
    <div class="content-container">
        <div class="left-content">
            <div class="text">
                <h1>Why we must cutting?</h1>
                <p> Cutting is important because it helps reduce body fat while maintaining the muscle mass gained during a bulking phase, leading to a leaner, more defined physique. The main goal of cutting is to create a calorie deficit, allowing the body to burn stored fat for energy while preserving muscle. This phase improves muscle definition and overall aesthetics, making muscles more visible and giving you a more athletic appearance. Cutting also enhances metabolic health by lowering excess fat, which can reduce the risk of heart disease, improve insulin sensitivity, and boost overall energy levels. Additionally, cutting helps improve physical performance and endurance by shedding excess weight, making movements more efficient. It’s the phase that refines the hard-earned muscle gains from bulking, providing a balanced, lean, and healthier body.s</p>
            </div>
        </div>
        
        <div class="gap"></div>
        
        <div class="right-content">
            <img src="{{URL('image\Image-content.jpg')}}" alt="" class="image-content">
        </div>
    </div>

    <div class="hl"></div>
    
    <div class="mid-content">
        <div class="head-content">
            <h1>Recomendation Food from our Personal Trainer</h1>
        </div>

        <div class="hl-divider" ></div> <!-- Divider -->
        
        <div class="card-carousel">
            <div class="card" style="width: 18rem;">
                <img src="{{URL('image\Menu1.jpg')}}" alt="" class="card-content">
                <div class="text-card">
                    <h5 style="" class="">395 Calories</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{URL('image\Menu2.jpg')}}" alt="" class="card-content">
                <div class="text-card">
                    <h5 style="" class="">374 Calories</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{URL('image\Menu3.jpg')}}" alt="" class="card-content">
                <div class="text-card">
                    <h5 style="" class="">207 Calories</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{URL('image\Menu4.jpg')}}" alt="" class="card-content">
                <div class="text-card">
                    <h5 style="" class="">403 Calories</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{URL('image\Menu5.jpg')}}" alt="" class="card-content">
                <div class="text-card">
                    <h5 style="" class="">500-700 kcal</h5>
                </div>
            </div>
        </div>
        
        <div class="hl-divider"></div> <!-- Divider -->
    </div>
    
    <div class="hl"></div>
    
    <div class="tips-content">
        
        <div class="head-content">
            <h1>Tips and Trick about Cutting</h1>
        </div>
        
        <div class="hl-divider" style="margin 200px"></div> 
        
        <div class="body-tips">
            <div class="accordion" id="accordionExample">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneFood" aria-expanded="true" aria-controls="collapseOneFood">
                                Aim for a Moderate Surplus
                            </button>
                        </h2>
                        <div id="collapseOneFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <li>Aim for a moderate surplus of about 300-500 extra calories per day. This helps you gain muscle without excessive fat.</li>
                                <li>Use a calorie calculator to estimate your maintenance needs and add a surplus.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoFood" aria-expanded="false" aria-controls="collapseTwoFood">
                            Prioritize Protein
                        </button>
                    </h2>
                    <div id="collapseTwoFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Protein is essential for muscle growth and repair. Aim for at least 1.6-2.2 grams of protein per kilogram of body weight.</li>
                            <li>Include protein-rich foods like lean meats, fish, eggs, dairy, and plant-based sources in your diet.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeFood" aria-expanded="false" aria-controls="collapseThreeFood">
                            Progressive Overload
                        </button>
                    </h2>
                    <div id="collapseThreeFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Gradually increase the weight, reps, or sets of your exercises to challenge your muscles and promote growth.</li>
                            <li>Keep a workout log to track your progress and ensure you're consistently challenging yourself.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourFood" aria-expanded="false" aria-controls="collapseFourFood">
                            Carbs for Energy
                        </button>
                    </h2>
                    <div id="collapseFourFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Carbohydrates are your body's primary energy source, especially during intense workouts.</li>
                            <li>Include whole grains, fruits, vegetables, and legumes in your diet for sustained energy and performance.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveFood" aria-expanded="false" aria-controls="collapseFiveFood">
                            Healthy Fats
                        </button>
                    </h2>
                    <div id="collapseFiveFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Carbs fuel your workouts and help with muscle recovery. 50-60% of your daily intake can be from carbs.</li>
                            <li>Include complex carbs like oats, rice, quinoa, sweet potatoes, and whole grains.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixFood" aria-expanded="false" aria-controls="collapseSixFood">
                            Meal Timing
                        </button>
                    </h2>
                    <div id="collapseSixFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Spread out your meals throughout the day to maintain energy and muscle repair. 4-6 meals a day can be beneficial.</li>
                            <li>Include protein in each meal to maximize muscle protein synthesis.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSevenFood" aria-expanded="false" aria-controls="collapseSevenFood">
                            Rest and Recovery
                        </button>
                    </h2>
                    <div id="collapseSevenFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Muscle grows during rest, not during training. Ensure you get 7-9 hours of sleep per night.</li>
                            <li>Take rest days seriously to allow your muscles to recover.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightFood" aria-expanded="false" aria-controls="collapseEightFood">
                            Track Progress
                        </button>
                    </h2>
                    <div id="collapseEightFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>Weigh yourself weekly and track your body measurements (e.g., arms, chest, legs) to monitor muscle gains vs. fat.</li>
                            <li>Adjust your caloric intake if you're gaining too much fat.</li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineFood" aria-expanded="false" aria-controls="collapseNineFood">
                            Be Patient
                        </button>
                    </h2>
                    <div id="collapseNineFood" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Bulking is a slow process. Aim for about 0.5 to 1 kg of weight gain per month to ensure that most of the weight is muscle.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="hl" style="margin: 0px"></div> <!-- Divider -->

    
    <!-- <section class="mb-5">
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
    </section> -->
    
    <div class="end-content">
        <div class="end-header">
            <h1>Ready to Start Your Cutting Program?</h1>
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
