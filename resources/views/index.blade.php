<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Portfolio Website</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/css/normalize.min.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" />

    <!--Update these with your fonts-->
    <link href="https://fonts.googlepis.com/css?family=Lora:400,700|Roboto+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('sigma/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('sigma/imgs/pic-1.jpg') }}" alt="">
        </div>

        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>
        <nav class="nav">
            <ul class="nav__list">
            <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="#services" class="nav__link">My Service</a></li>
            <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
            <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
            </ul>
        </nav>
    </header>

    <!--introduction-->
    
    <section class="intro" id="home">
         <h1 class="section__title section__title--intro">
            Hi! I am <strong>Shamima Sigma</strong> 
         </h1>
         <p class="section__subtitle section__subtitle--intro">front-end dev</p>
         <img src="{{ asset('sigma/imgs/sigma-1.jpg') }}" alt="a picture of Sigma smiling" class="intro__img">
    </section>  
    
    <!--My Services-->
    
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
            <div class="service">
              <h3>Design + Development</h3>
              <p>In design development, the schematic
                plans and elevations are reviewed, revised
                and expanded to incorporate all the details 
                and specifications required for construction.
                Project components are looked at to the smallest
                detail. These include: Interior and exterior building
                materials and finishes.</p>
            </div>  <!--/close service-->

            <div class="service">
                <h3>E-Commerce</h3>
                <p>E-commerce (electronic commerce) is the buying
                and selling of goods and services, or the transmitting
                of funds or data,over an electronic network, primarily
                the internet. These businesstransactions occur either 
                as business-to-business (B2B), business-to-consumer(B2C),
                consumer-to-consumer or consumer-to-business.</p>
              </div>  <!--/close service-->

              <div class="service">
                <h3>Photoshop</h3>
                <p>Photoshop is a photo editing and graphics 
                creation software that was developed by the company, 
                Adobe. Photoshop offers a wide variety of image editing
                features as well as the capability to create complex graphics. 
                Photoshop has become the industry standard for many creatives 
                as it is very versatile and is usually one of the first programs 
                many learn to use.</p>
              </div>  <!--/close service-->
        </div>  <!--/close services-->


        <a href="#work" class="btn">My Work</a>
</section>

<!--About Me-->

<section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Designer & developer based out of NYC</p>
    
        <div class="about-me__body">
            <p>This seems like a no brainer,
            right? But sometimes we can get
            overly ambitious and end up discouraged.
            For your first project, it’s a good idea
            to choose something simple and fun.
            An ecommerce site is more complicated
            and would be better to tackle once you 
            have more experience. </p>
            <p>A blog is a great place to start.
            It will be a good design exercise and 
            you’ll learn how a Content Management 
            System (CMS) works, which will be important 
            to know for future site designs. Best of 
            all — you don’t have to start from scratch.
            There are plenty of blog templates that make
            it easy to put one together.Templates are a 
            valuable learning tool. Watching how HTML,
            CSS, and Javascript elements are styled and
            come together will give you deeper insight 
            into what makes a design work. You can use 
            templates as a foundation to make changes and 
            customizations.</p>
        </div>
   <img src="{{ asset('sigma/imgs/background.jpg') }}" alt="Sigma learing against a bus" class="about-me__img">
</section>

<!--My Work-->

<section class="my-work" id="work">
    <h2 class="section__title section__title--work">My Work</h2>
    <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

    <div class="portfolio">

        <!--Portfolio Item-01-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/1.PNG') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-02-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/2.PNG') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-03-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/3.PNG') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-04-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/4.PNG') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-05-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/6.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-06-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/7.PNG') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-08-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-1.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-09-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-2.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-10-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-3.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-11-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-4.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-12-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-5.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-13-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-6.jpg') }}" alt="" class="portfolio__img">
        </a>

        <!--Portfolio Item-14-->
        <a href="#" class="portfolio_item">
            <img src="{{ asset('sigma/imgs/s-7.jpg') }}" alt="" class="portfolio__img">
        </a>
       
    </div>
</section>

<!--Footer-->

<footer class="footer">
    <!--Replace with your own email address-->
    <a href="mailto:hello@sigma.dev" class="footer__link">hello@sigma.dev</a>
    <ul class="social-list">
       <li class="social-list__item">
          <a class="social-list__link" href="https://codepen.io">
            <i class="fab fa-codepen"></i>
          </a>
        </li>
    <li class="social-list__item">
         <a class="social-list__link" href="https://dribbble.com">
           <i class="fab fa-dribbble"></i>
         </a>
    </li>
    <li class="social-list__item">
         <a class="social-list__link" href="https://twitter.com">
            <i class="fab fa-twitter"></i>
         </a>
    </li>
    <li class="social-list__item">
          <a class="social-list__link" href="https://github.com">
            <i class="fab fa-github"></i>
          </a>
    </li>
    </ul>
</footer>


<script src="{{ asset('sigma/index.js') }}"></script>

</body>
</html>