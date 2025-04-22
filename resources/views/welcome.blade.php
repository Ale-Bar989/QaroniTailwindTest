<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qaroni || TailwindCss in Laravel</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="https://qaroni.com/images/shared/ico/qaroni.ico" type="image/x-icon">


        <!-- Remix Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"/>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    
    <body class="">


      <!-- Header -->
      <header id="navbar" class="bg-white fixed w-full top-0 left-0 z-50">
        <nav class="container w-auto flex items-center justify-between lg:h-16 sm:h-20">
            <div>
              <img class="lg:w-40 sm:w-30" src="https://qaroni.com/images/header/png/qaroni-logo-black.webp" alt="qaroni-logo">
            </div>

            <div id="nav-menu" class="container absolute top-0 left-[-100%] min-h-[80vh] w-full bg-white-900/80 backdrop-blur-sm flex items-center justify-center duration-300 overflow-hidden lg:static lg:min-h-fit lg:bg-transparent lg:w-auto">
              <ul class="flex flex-col items-center gap-8 lg:flex-row">
                <li>
                  <a href="#home" class="nav-link">Home</a>
                </li>

                <li>
                  <a href="#services" class="nav-link">Services</a>
                </li>

                <li>
                  <a href="#about" class="nav-link">About Us</a>
                </li>

                <li>
                  <a href="#popular" class="nav-link">Popular</a>
                </li>
              </ul>
            </div>       

            <div class="lg:text-xl sm:text-3x1 cursor-pointer z-50 lg:hidden">
              <i class="ri-menu-4-line" id="hamburger"></i>
            </div>
        </nav>
      </header>

      <main>
        <!-- Home -->
        <section id="home" class="relative flex justify-center items-center">
          <div class="container">
            <div class="flex sm:flex-col lg:flex-row items-center gap-5">

              <!-- Blob 1 -->
              <div class="w-64 h-64 bg-primary-color rounded-full blur-3xl -z-10 opacity-40 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>

              <!-- Blob 1 -->
              <div class="w-64 h-64 bg-primary-color rounded-full blur-3xl -z-10 opacity-40 absolute transform right-0 bottom-0"></div>

              
              <!-- Content-->
              <div class="w-full space-y-5">
                <h1>
                  <span class="text-primary-color">Software Development</span>
                </h1>
                <p class="text-black-300 text-2xl text-start">
                  In <span class="text-primary-color">Qaroní</span>, we transform technological challenges
                  into <span class="text-primary-color">solutions that drive our customers' futures.</span>          
                  Our goal is clear: making technology work for us and
                  creating secure, scalable, and user-experience-focused
                  software.
                </p>

                <p>
                  <span class="text-primary-color text-2xl">We make it possible.</span> 
                </p>

                <div class="flex flex-col gap-2 sm:flex-row md:gap-4 lg:pt-5 xl:pt-10">
                  <button class="btn">
                    <span>Get more information</span>
                    <i class="ri-code-s-slash-line"></i>
                  </button>
             
                  <button class="btn btn_outline">
                    <span>Contact us</span>
                    <i class="ri-code-s-slash-line"></i>
                  </button>
                </div>

                <p class="font-nunito text-black-300">
                  What are you waiting for?
                </p>

                <div class="flex items-center gap-5 text-lg lg:pt-10">
                  <i class="ri-facebook-fill text-black-300 hover:text-primary-color duration-300 cursor-pointer"></i>
                  <i class="ri-twitter-x-fill text-black-300 hover:text-primary-color duration-300 cursor-pointer"></i>
                  <i class="ri-instagram-fill text-black-300 hover:text-primary-color duration-300 cursor-pointer"></i>
                  <i class="ri-linkedin-fill text-black-300 hover:text-primary-color duration-300 cursor-pointer"></i>
                </div>
              </div>

              <!-- Image -->
              <div class="w-full relative">
                <div class="flex items-center justify-center">
                  <img class="w-130" src="https://qaroni.com/images/hero/png/hero7.webp" alt="about-image">
                </div>
                
                
                <!-- code -->
                <div class="absolute -top-10 lg:top-5 right-0 opacity-30 animate-movingY">
                  <i class="ri-code-s-slash-line text-6xl text-primary-color"></i>
                </div>

                <!-- solution  -->
                <div class="absolute bottom-0 xl:bottom-12 left-0 opacity-30 animate-rotating">
                  <i class="ri-search-2-line text-6xl text-primary-color"></i>
                </div>

                <!-- creativity -->
                <div class="hidden absolute -top-10 lg:top-5 -left-5 opacity-30 lg:block animate-scalingUp">
                  <i class="ri-lightbulb-flash-line text-6xl text-primary-color"></i>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Services -->
        <div id="services" class="bg-secondary-color text-primary-color py-20 flex justify-center items-center">
          <div class="container w-full grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Card 1 -->
            <div class="border border-primary-color p-5 cursor-pointer rounded-md hover:shadow-2xl hover:-translate-y-1 duration-300 space-y-5">
              <div class="flex items-center gap-5">
                <i class="ri-bank-fill text-3xl md:text-4xl xl:text-5xl m-auto"></i>
                <p class="md:text-lg font-bold text-center">
                  Banking &<br>                  
                  Financial Services
                </p>
              </div>
              <p class="font-monserrat text-justify">
                We are experts in software development and solution innovation for the banking and financial services industry.
              </p>
            </div>

            <!-- Card 2 -->
            <div class="border border-primary-color p-5 cursor-pointer rounded-md hover:shadow-2xl hover:-translate-y-1 duration-300 space-y-5">
              <div class="flex items-center gap-5">
                <i class="ri-government-fill text-3xl md:text-4xl xl:text-5xl m-auto"></i>
                <p class="md:text-lg font-bold text-center">
                  Public<br>
                  Administration
                </p>
              </div>
              <p class="font-monserrat text-justify">
                We develop solutions that improve the efficiency and quality of public administration services and interaction with citizens.
              </p>
            </div>

            <!-- Card 3 -->
            <div class="border border-primary-color p-5 cursor-pointer rounded-md hover:shadow-2xl hover:-translate-y-1 duration-300 space-y-5">
              <div class="flex items-center gap-5">
                <i class="ri-truck-fill text-3xl md:text-4xl xl:text-5xl m-auto"></i>
                <p class="md:text-lg font-bold text-center">
                  Logistics & <br>
                  Transportation
                </p>
              </div>
              <p class="font-monserrat text-justify">
                We digitize processes and optimize resources in the logistics sector to improve efficiency and quality of services.
              </p>
            </div>

            <!-- Card 4 -->
            <div class="border border-primary-color p-5 cursor-pointer rounded-md hover:shadow-2xl hover:-translate-y-1 duration-300 space-y-5">
              <div class="flex items-center gap-5">
                <i class="ri-shopping-cart-fill text-3xl md:text-4xl xl:text-5xl m-auto"></i>
                <p class="md:text-lg font-bold text-center">
                  E-Commerce
                </p>
              </div>
              <p class="font-monserrat text-justify">
                We are experts in software development and solution innovation for the banking and financial services industry.
              </p>
            </div>
          </div>
        </div>

        <!-- About us -->
        <section id="about" class="relative overflow-hidden flex justify-center items-center flex-col">
          <div class="flex flex-col items-center gap-3 text-center sm:mb-10 md:mb-20">
            <h2 class="title">About Us</h2>
            <p class="max-w-2xl">Follow instructions for more</p>
          </div>

          <div class="container space-y-10 xl:space-y-0">
            <!-- Item 1 -->
            <div class="flex sm:flex-col lg:flex-row items-center gap-5 mx-[3rem]">
                <!-- Image -->
                <div class="w-full lg:w-1/2">
                  <img class="w-full sm:w-2/3 lg:w-full xl:w-2/3 mx-auto" src="https://qaroni.com/images/illustration/1.webp" alt="about-image">
                </div> 

                <!-- Content -->
                <div class="w-full lg:w-1/2 ml-[1rem]">
                  <div class="space-y-5">
                    <h3>Technology tailored <span class="text-primary-color">to you</span><br>
                    to boost your business.</h3>
                    <p class="text-black-300 font-monserrat size-fit">At Qaroní, we understand that every company has unique needs. That's why we specialize in developing customized software solutions that perfectly fit your business goals. From mobile applications to management systems, we have the expertise and tools to make it a reality.</p>
                  </div>
                </div>
            </div>
          </div>
        </section>

      </main>
      


    </body>
</html>
