<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
        <link
            href="/docs/5.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="/img/Logo - 3.png" type="image/png">

    </head>
    <body>
        <header id="mainHeader">
            @include('includes.header')
        </header>

        {{-- KONTEN --}}
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album example</h1>
                    <p class="lead text-muted">Something short and leading about the collection
                        below—its contents, the creator, etc. Make it short and sweet, but not too short
                        so folks don’t simply skip over it entirely.</p>
                    <p>
                        <a href="#" class="btn btn-warning my-2 py-2" style="width:200px">Main call to action</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col" data-aos="fade-right">
                        <div class="card shadow-sm">
                            <img src="img/1.png" alt="" style="object-fit: contain;">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up">
                        <div class="card shadow-sm">
                            <img src="img/2.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-left">
                        <div class="card shadow-sm">
                            <img src="img/3.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-right">
                        <div class="card shadow-sm">
                            <img src="img/4.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card shadow-sm">
                            <img src="img/5.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-left">
                        <div class="card shadow-sm">
                            <img src="img/6.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-right">
                        <div class="card shadow-sm">
                            <img src="img/7.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="card shadow-sm">
                            <img src="img/8.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-left">
                        <div class="card shadow-sm">
                            <img src="img/9.png" alt="" style="object-fit: contain;">


                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        @include('includes.footer')
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
