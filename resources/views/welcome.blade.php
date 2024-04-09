<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Verador Digital</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

<!-- veador digital assets-->

<meta name="description" content="Technoit - IT Solutions & Business Services Multipurpose Responsive Website Template">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="" name="ZRTHEMES">

  <!-- Favicons -->
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&amp;display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/stylesheets/styles.css" rel="stylesheet">
   </head>
   <!-- End Header -->
    <body class="antialiased">
      <header id="header" class="header d-flex align-items-center sticked stikcy-menu">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index-2.html" class="logo d-flex align-items-center">
        <img src="assets/images/brasil.png" alt="logo">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index-2.html" class="">Home</a></li>
          @if (Route::has('login'))
          @auth
          <li><a href="{{ url('/dashboard') }}" class="">Menu</a></li>
          @else
          <li><a href="{{ route('login') }}" class="">Logar</a></li>
          @if (Route::has('register'))
          <li><a href="{{ route('register') }}" class="">Registrar</a></li>
          @endif
          @endauth
          <li><a href="testimonials.html" class="">Testimonials</a></li>
          <li><a href="team.html" class="">Team</a></li>
          @endif
        
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="packages.html">Pricing</a></li>
              <li><a href="faqs.html">FAQs</a></li>
              <li><a href="privacy-policy.html">Terms &amp; Conditions</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="blogs.html">Blogs</a></li>
              <li><a href="blog-details.html">Blog Detail Page</a></li>
            </ul>
          </li>
          <li><a href="blogs.html">News</a></li>
        </ul>
      </nav><!-- .navbar -->
      <a href="contact.html" class="btn-get-started hide-on-mobile">Get Quotes</a>
      <button id="darkmode-button"><i class="bi bi-moon-fill"></i></button>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!--  Hero Section  -->
  <section id="hero" class="hero sticked-header-offset">

    <div id="particles-js"></div>
    <div id="repulse-circle-div"></div>
    <div class="container position-relative">
      <div class="row gy-5 aos-init aos-animate">
        <div class="col-lg-7 offset-lg-5 dark-bg order-lg-1 d-flex flex-column justify-content-start text-left caption">
          <h2 data-aos="fade-up">A verdadeira VOZ <span>do BRAZIL</span><span class="circle" data-aos="fade-right" data-aos-delay="800">.</span></h2>
          <p data-aos="fade-up" data-aos-delay="400">Vamos destituir os vereadores omissos, corruptos e incompetentes.</p>
          <div class="social" data-aos="fade-up" data-aos-delay="600">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
          </div>
          <div class="d-flex justify-content-start">
            <a href="#contact" class="btn-get-started mr-20" data-aos="fade-up" data-aos-delay="800">Get Quotes</a>
            <a href="#services" class="btn-get-started" data-aos="fade-up" data-aos-delay="1000">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
<main id="main">
 <!-- Start Service Section -->
    <!-- Start Service Section -->
    
        <!-- Featured -->
        <section>
          <div class="container" id="featured">
              <div class="section-header" data-aos="fade-up" data-aos-delay="100">
                <h2>Quem pode processar o Estado?</h2>
                <p>Qualquer cidadão é apto a procurar o Poder Judiciário e fazer a defesa dos seus direitos.</p>
              </div>
          <div class="row">
            <!-- start  left -->
            <div class="col-md-4 left">
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="description">
                  <h4>Exija prestação de contas</h4>
                  <p>artigo 5º (inciso XXXIII) da Constituição Federal, segundo o qual “todos têm direito a receber dos órgãos públicos informações de seu interesse particular, ou de interesse coletivo ou geral, que serão prestadas no prazo da lei, sob pena de responsabilidade, ressalvadas aquelas cujo sigilo seja imprescindível à segurança da sociedade e do Estado”..</p>
                </div>
                  <div class="icon">
                    <img src="assets/images/icons/icon-1.svg" alt="icon">
                  </div>
              </div>
              
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="400">
                <div class="description">
                  <h4>Poste oque sua região realmente precisa</h4>
                  <p>Mostre oque realmente sua cidade percisa e vamos ver se os vereadores estão realmente representando a vontade do povo.</p>
                </div>
                  <div class="icon">
                    <img src="assets/images/icons/icon-2.svg" alt="icon">
                  </div>
            </div>
              
              
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="500">
                <div class="description">
                  <h4>Advogados</h4>
                  <p>Vamos te ajudar a mover ações juridicas contra o estado municipio ou governo federal</p>
                </div>
                <div class="icon">
                  <img src="assets/images/icons/icon-3.svg" alt="icon">
                </div>
              </div>
            </div>
            <!-- end  left -->
            
            <!-- start  center -->
            <div class="col-md-4 p-4 p-sm-5 center">
              <div class="list-center-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="center-icon">
                  <img src="assets/images/features.jpg" alt="icon">
                </div>
              </div>
            </div>
            <!-- end  center -->
            <!-- start  right -->
            <div class="col-md-4 right">
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="icon">
                  <img src="assets/images/icons/icon-4.svg" alt="icon">
                </div>
                <div class="description">
                  <h4>Pricing</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
              
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="icon">
                  <img src="assets/images/icons/icon-5.svg" alt="icon">
                </div>
                <div class="description">
                  <h4>Delivery</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
              
              
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="500">
                <div class="icon">
                  <img src="assets/images/icons/icon-6.svg" alt="icon">
                </div>
                <div class="description">
                  <h4>Support</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <!-- end  right -->
          </div>
          
        </div>
    </section>
    <!-- Featured -->


    <!-- Portfolio Section -->
    
    <!--  Testimonials Section  -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-1.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Jhone Doe</h3>
                      <h4>CFO</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-2.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Afa Rose</h3>
                      <h4>Web Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-3.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Keena Lara</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-4.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Fizzi Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!--  Start Counter Section  -->
    <!--  Clients Section  -->
    <div id="clients" class="clients section">
      <div class="container" data-aos="zoom-out">
  
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/images/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/images/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>
  
      </div>
    </div>
    <!-- End Clients Section -->


    <!--  Our Team Section  -->
    <section id="team" class="team sections-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Team</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/images/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Jhone Bi</h4>
              <span>Application Manager</span>
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/images/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sani Awesome</h4>
              <span>Social Media</span>
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/images/team/team-3.jpg" class="img-fluid" alt="">
              <h4>Andrio Willi</h4>
              <span>Content Writer</span>
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Afa Jonson</h4>
              <span>Business Manager</span>
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section>
    <!-- End Our Team Section -->


    <!--  Frequently Asked Questions Section  -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>FAQ's</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    What is web domain and hosting?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Which server is best for websites linux or windows?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Google cloud or Amazon server which one is best and fast?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Why Organic SEO is important for all businesses?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->


    <!--  Call To Action Section  -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center aos-init aos-animate" data-aos="zoom-out">
         <div class="row gy-4">
          <div class="col-lg-12">
              <h3>Let's Discuss your Projects</h3>
              <p>We pride ourselves with our ability to perform and deliver results. Use the form below to discuss your project needs with our team, we will get back asap</p>
              <a class="cta-btn" href="mailto:info@example.com">Conatct Us</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action Section -->


    <!--  Recent Blog Posts Section  -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Blogs</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Domain & Hosting</p>
              <h2 class="title">
                <a href="blog-details.html">How to host website on any hosting provider?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">William Bla</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Feb 1, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Advertisement</p>
              <h2 class="title">
                <a href="blog-details.html">How to create add on google adwords?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Jobi Ret</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Oct 5, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Marketing</p>
              <h2 class="title">
                <a href="blog-details.html">What is digital marketing and why is important?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Main Dow</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Dec 22, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- Start Contact Section -->
    <div id="contact" class="contact-section section">
      <div class="section-header">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12" data-aos="fade-right">
            <div class="contact-information-box-3">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6>Address:</h6>
                      <p>11 West Town</p>
                      <p>PBo 12345, United States</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6>Phone:</h6>
                      <p>+1 1234 56 789</p>
                      <p>+1 1234 56 780</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6>Email:</h6>
                      <p>info@example.com</p>
                      <p>email@example.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12" data-aos="fade-left">
            <div class="contact-form-box contact-form contact-form-3">
              <div class="form-container-box">
                <form class="contact-form form" id="ajax-contact" method="post" action="https://zrtechsolutions.com/demo/html/technoit/assets/phpscripts/contact.php">
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-input-box">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name*"
                            required="required" data-error="Name is required.">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-input-box">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email*"
                            required="required" data-error="Valid email is required.">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group form-input-box">
                          <input type="text" class="form-control" name="subject" placeholder="Subject"
                            required="required">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group form-input-box">
                          <textarea class="form-control" id="message" name="message" rows="7"
                            placeholder="Write Your Message*" required="required"
                            data-error="Please, leave us a message."></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" data-text="Send Message">Send Message</button>
                      </div>
                      <div class="messages">
                        <div class="alert alert alert-success alert-dismissable alert-dismissable hidden"
                          id="msgSubmit"><button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button> Thank You! your message has been sent. </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- End Contact Section -->
      
</main>

<div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/javascripts/jquery.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/javascripts/plugins.js"></script>
  <script src="assets/javascripts/purecounter_vanilla.js"></script>
  <script src="assets/javascripts/validator.min.js"></script>
  <script src="assets/javascripts/contactform.js"></script>
  <script src="assets/javascripts/particles.min.js"></script>
  <script src="assets/javascripts/script.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/javascripts/main.js"></script>
</div>
    </body>
</html>
