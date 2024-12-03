<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/Logo - 3.png" type="image/png">

</head>

<body>
    <header id="mainHeader">
        @include('includes.header')
    </header>

    {{-- Jumbotron --}}
    <section class="py-5 text-center vault-section">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <!-- Title -->
                <h1 class="fw-light display-3 text-white">ENTER THE
                    <br>DIGITAL VAULT
                </h1>

                <!-- Description -->
                <p class="lead mb-4 text-white">
                    Explore a world of geometric brilliance and pixel perfection
                </p>

                <!-- Button -->
                <p>
                    <a href="#" class="btn btn-warning btn-lg py-2" style="width:200px">Explore Now</a>
                </p>
            </div>
        </div>
    </section>

    {{-- SECTION 1 --}}
    <div class="sec1">
        <section class="py-4 text-center container">
            <div class="row py-lg-3">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Empowering Photographers</h1>
                    <p class="lead text-muted">Unleash Your Creative Vision with Apertix</p>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                {{-- card 1 --}}
                <div class="col" data-aos="fade-right">
                    <div class="card shadow-sm">
                        <img src="/img/sec1 (3).png" alt="" class="card-img-top"
                            style="padding: 20px; max-height: 300px; object-fit: contain;">

                        <div class="card-body">
                            <h2 class="card-title text-center">Precision Crafted</h2>
                            <p class="card-text text-center" style="padding:10px">Unlock the Full Potential
                                of Your Camera with Apertix's Cutting-Edge Accessories.</p>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col" data-aos="fade-up">
                    <div class="card shadow-sm">
                        <img src="/img/sec1 (2).png" alt="" class="card-img-top"
                            style="padding: 20px; max-height: 300px; object-fit: contain;">

                        <div class="card-body">
                            <h2 class="card-title text-center">Seamless Integration</h2>
                            <p class="card-text text-center" style="padding:10px">Elevate Your Photography Experience
                                with Apertix's Innovative Gear.</p>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col" data-aos="fade-left">
                    <div class="card shadow-sm">
                        <img src="/img/sec1 (1).png" alt="" class="card-img-top"
                            style="padding: 20px; max-height: 300px; object-fit: contain;">

                        <div class="card-body">
                            <h2 class="card-title text-center">Versatile Solutions</h2>
                            <p class="card-text text-center" style="padding:10px">Unleash Your Creativity with Apertix's
                                Versatile Photography Tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2 --}}
    <section class="text-center section2" data-aos="fade-up">
        <!-- Main Image -->
        <img src="img/section.png" alt="Main Image" style="width: 100%;">
        <div class="container">

            <!-- Icons Row -->
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <img src="img/Logo - 1.png" alt="Icon 1" class="icon">
                </div>
                <div class="col-auto">
                    <img src="img/Shell.png" alt="Icon 2" class="icon">
                </div>
                <div class="col-auto">
                    <img src="img/Logo - 2.png" alt="Icon 3" class="icon">
                </div>
                <div class="col-auto">
                    <img src="img/Logo - 3.png" alt="Icon 4" class="icon">
                </div>
                <div class="col-auto">
                    <img src="img/Logo - 4.png" alt="Icon 5" class="icon">
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3 --}}
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/img/Image 9.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                    width="700" height="500" loading="lazy" style="border-radius: 30px;" data-aos="fade-left">
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-5 fw-bold lh-1 mb-3">Capture the Extraordinary with Apertix</h1>
                <p class="lead">Immerse Yourself in the Art of Photography with Apertix - Your
                    Gateway to Visually Stunning Moments. Explore our wide range of high-quality
                    cameras, lenses, and accessories designed to elevate your creative expression
                    and capture the world around you in breathtaking detail</p>
            </div>
        </div>
    </div>

    {{-- SECTION 4 --}}
    <div class="hanging-icons-section">
        <div class="container" id="hanging-icons">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>
                            <b>Inspiring Innovations</b>
                        </h2>
                        <p>Elevate Your Photography with Apertix's Cutting-Edge Cameras and Accessories.
                            Unleash your creative potential and capture stunning images that captivate your
                            audience.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>
                            <b>Unparalleled Quality</b>
                        </h2>
                        <p>Experience the Pinnacle of Photographic Excellence with Apertix's Premium
                            Cameras and Lenses.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div>
                        <h2>
                            <b>Exceptional Craftsmanship</b>
                        </h2>
                        <p>Unlock the Full Potential of Your Photography with Apertix's Expertly
                            Engineered Accessories.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 5 --}}
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 position-relative" data-aos="fade-right">
                <div class="image-container">
                    <img src="img/Image 10.png" alt="Apertix Camera" class="img-fluid rounded"
                        style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-md-6 text-container" data-aos="fade-left">
                <h2 class="font-weight-bold" style="margin-bottom: 80px; color:#F9D84F">Apertix Signature Series</h2>
                <h3 class="font-weight-bold" style="font-size:50px;">
                    <b>Elevate Your Shots</b>
                </h3>
                <p style="line-height: 30px;">
                    Unlock the Full Potential of Your Camera with Apertix's Innovative Accessories.
                    From state-of-the-art lenses to advanced tripods, our meticulously crafted gear
                    is designed to enhance your photography experience and help you capture stunning
                    images that captivate your audience.
                </p>
                <div class="mt-4">
                    <a class="btn btn-warning btn-lg me-2" href="#" style="width: 400px;">Explore Our
                        Collection</a>
                    {{-- <a class="btn btn-secondary btn-lg" href="#">Shop Now</a> --}}
                </div>

                <div class="shop d-flex align-items-center my-4">
                    <img src="img/Ellipse 1.png" alt="Creative Image" class="img-fluid"
                        style="max-width: 80px; margin-right: 10px;">
                    <!-- Decreased max-width -->
                    <div style="text-align: left; flex-grow: 1; padding-left: 10px;">
                        <h3 style="font-size: 1.25rem; margin: 0;">Unleash Your Creativity</h3>
                        <!-- Decreased font size -->
                        <p style="font-size: 0.9rem; margin: 0;">Explore More</p>
                        <!-- Decreased font size -->
                    </div>
                    <a href="{{ route('login') }}" class="class=" btn="btn" btn-lg"
                        href="
                            #"
                        style="
                            background-color:="background-color:" #8ec3a4;="#8EC3A4;"
                        color:="color:" white;="white;" font-size:="font-size:" 0.9rem;">
                        Log In
                    </a>
                </div>
            </div>
        </div>
    </section>





    {{-- SECTION 6 --}}
    <div class="
                            sec1"="sec1"">
                            <section class="py-4 text-center container">
                                <div class="row py-lg-3">
                                    <div class="col-lg-6 col-md-8 mx-auto">
                                        <h1 class="fw-light">Trusted by Professionals</h1>
                                        <p class="lead text-muted">Experience the Apertix Difference in Photography</p>
                                    </div>
                                </div>
                            </section>

                            <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    {{-- card 1 --}}
                                    <div class="col" data-aos="fade-right">
                                        <div class="card shadow-sm">
                                            <img
                                                src="/img/Image 11.png"
                                                alt=""
                                                class="card-img-top"
                                                style="padding: 20px; max-height: 300px; object-fit: contain;">

                                            <div class="card-body">
                                                <h2 class="card-title text-center">Premium Performance</h2>
                                                <p class="card-text text-center" style="padding:10px">Discover the Pinnacle of Photographic Excellence with Apertix's.</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Card 2 --}}
                                    <div class="col" data-aos="fade-up">
                                        <div class="card shadow-sm">
                                            <img
                                                src="/img/Image 12.png"
                                                alt=""
                                                class="card-img-top"
                                                style="padding: 20px; max-height: 300px; object-fit: contain;">

                                            <div class="card-body">
                                                <h2 class="card-title text-center">Uncompromising Reliability</h2>
                                                <p class="card-text text-center" style="padding:10px">Elevate Your Photography
                                                    Journey with Apertix's Exceptional Accessories and Gear.</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Card 3 --}}
                                    <div class="col" data-aos="fade-left">
                                        <div class="card shadow-sm">
                                            <img
                                                src="/img/Image 13.png"
                                                alt=""
                                                class="card-img-top"
                                                style="padding: 20px; max-height: 300px; object-fit: contain;">

                                            <div class="card-body">
                                                <h2 class="card-title text-center">Innovative Design</h2>
                                                <p class="card-text text-center" style="padding:10px">Enhance Your Creative
                                                    Vision with Apertix's Meticulously Crafted Photography Solutions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- SECTION 7 --}}
                        <div class="container my-5">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h1 class="display-4">Shaping the Future of Photography</h1>
                                    <p class="lead text-muted">Discover the Apertix Advantage</p>
                                    <a
                                        class="btn btn-warning btn-lg py-2 px-4"
                                        href="#"
                                        role="button"
                                        style="border-radius: 20px; width:200px;">Learn More</a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="bg-light border rounded p-4 shadow-sm" style="width: 350px;">
                                        <h5 class="mb-4">Privacy</h5>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="text-decoration-none text-dark">Terms of Use</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-decoration-none text-dark">Accessibility</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-decoration-none text-dark">Sitemap</a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-decoration-none text-dark">Cookie Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <footer>
                            @include('includes.footer')
                        </footer>

                        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                        <script>
                            AOS.init();
                        </script>
                    </body>
                </html>
