<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Enhanced Navigation Bar Styles */
        .navbar {
            background: linear-gradient(90deg, #3b5998, #00acee);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: bold;
            color: #fff;
            padding: 5px 10px;
        }

        .navbar-brand img {
            width: 100px; /* Smaller logo size */
            height: 100px; /* Fixed height for a circle shape */
            border-radius: 50%; /* Makes the logo circular */
            object-fit: cover; /* Ensures the image is properly contained within the circle */
        }

        .nav-item a {
            font-size: 1.1rem;
            color: #fff !important;
            padding: 10px 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-item a:hover {
            background-color: #007bb5;
            border-radius: 5px;
            color: #fff;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Enhanced Footer Styles */
        .footer {
            background: linear-gradient(90deg, #333, #555);
            color: white;
            padding: 40px 0;
            margin-top: 40px;
            text-align: center;
        }

        .footer a {
            color: #f8f9fa;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
            transition: color 0.3s, text-decoration 0.3s;
        }

        .footer a:hover {
            color: #00acee;
            text-decoration: underline;
        }

        .footer p {
            margin: 10px 0 0 0;
            font-size: 0.9rem;
        }

        /* Footer Icons */
        .footer-icons a {
            font-size: 1.5rem;
            margin: 0 15px;
            color: #f8f9fa;
            transition: color 0.3s;
        }

        .footer-icons a:hover {
            color: #00acee;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.4rem;
            }

            .navbar-nav .nav-item a {
                font-size: 1rem;
            }

            .footer {
                padding: 30px 0;
            }

            .footer-icons a {
                font-size: 1.2rem;
                margin: 0 8px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/logo.webp') }}" alt="Brand Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index.show')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cogs"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-tags"></i>Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2025 BrandName. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a> |
                <a href="#">Contact Us</a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
