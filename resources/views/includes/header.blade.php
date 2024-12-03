<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        crossorigin="anonymous">

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/Logo - 3.png" type="image/png">
</head>

<body>
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-4 mb-4 border-bottom">
            <!-- Logo -->
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="img/LogoItem.png" alt="Logo">
            </a>

            <!-- Navigation -->
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/home" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
                <li><a href="/products" class="nav-link px-2 link-dark">Products</a></li>
                <li><a href="/contact" class="nav-link px-2 link-dark">Contact</a></li>
            </ul>

            <!-- Login and Register Buttons -->
            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" class="btn" style="border-radius: 25px; padding:10px; width:140px;">
                    Log in
                </a>
                <a href="{{ route('register') }}" class="btn btn-warning"
                    style="border-radius: 25px; padding:10px; width:140px;">
                    Register
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true"
                style="background: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border: none; background-color: transparent;">
                        <div class="modal-body" style="padding: 0;">
                            <!-- Konten dari login.blade.php akan dimuat di sini -->
                            <div id="loginContent">
                                <!-- Konten dari login.blade.php akan dimuat di sini melalui AJAX -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <script>
        // Script untuk memuat konten login.blade.php ketika modal dibuka
        const loginModal = document.getElementById('loginModal');
        loginModal.addEventListener('show.bs.modal', function(event) {
            const loginContent = document.getElementById('loginContent');
            fetch('/signin')
                .then(response => response.text())
                .then(html => {
                    loginContent.innerHTML = html; // Memasukkan HTML dari login.blade.php ke dalam modal
                })
                .catch(error => {
                    console.error('Error loading the login form:', error);
                });
        });
    </script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
