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
        <style>

            h3 {
                font-size: 1.75rem;
                /* Ukuran font untuk judul */
                color: #3A9D5E;
                /* Warna untuk judul */
                margin-bottom: 15px;
                /* Jarak bawah untuk judul */
            }

            p {
                font-size: 1rem;
                /* Ukuran font untuk paragraf */
                line-height: 1.6;
                /* Tinggi garis untuk keterbacaan */
                color: #343a40;
                /* Warna teks untuk paragraf */
                margin-bottom: 15px;
                /* Jarak bawah untuk paragraf */
            }

            a {
                color: #3A9D5E;
                /* Warna untuk tautan */
                text-decoration: none;
                /* Menghilangkan garis bawah */
                font-weight: bold;
                /* Tebalkan font tautan */
                transition: color 0.3s;
                /* Transisi untuk efek hover */
            }

            a:hover {
                color: #319d52;
                /* Warna tautan saat hover */
            }
        </style>
        <header id="mainHeader">
            @include('includes.header')
        </header>

        {{-- SECTION CONTACT --}}
        <div class="content">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-10">

                        <div class="row align-items-center">
                            <div class="col-lg-7 mb-5 mb-lg-0">

                                <h2 class="mb-5" style="font-size:50px; padding-left:10px; margin-top:20px;">
                                    <b>Fill the form.
                                        <br>
                                        It's easy.</b>
                                </h2>

                                <form
                                    class="border-right pr-5 mb-5"
                                    method="post"
                                    id="contactForm"
                                    name="contactForm"
                                    action="{{ route('contact.store') }}">
                                    @csrf
                                    <!-- This token is essential for POST requests in Laravel -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="fname"
                                                id="fname"
                                                placeholder="First name"
                                                required="required">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="lname"
                                                id="lname"
                                                placeholder="Last name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                id="email"
                                                placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <textarea
                                                class="form-control"
                                                name="description"
                                                id="description"
                                                cols="30"
                                                rows="7"
                                                placeholder="Write your message"
                                                required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input
                                                type="submit"
                                                value="Send Message"
                                                class="btn btn-primary rounded-0 py-2 px-4">
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-lg-4 ml-auto">
                                <h3 class="mb-4">Let's talk about everything.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti
                                    itaque similique magni. Magni, laboriosam perferendis maxime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            @include('includes.footer')
        </footer>

    </body>
</html>
