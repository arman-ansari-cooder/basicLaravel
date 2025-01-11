<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Register Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6A1B9A, #283593); /* New dark purple to blue gradient */
            overflow: hidden;
        }

        .container {
            background: #ffffff;
            width: 100%;
            max-width: 450px;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            text-align: center;
            transform: scale(0.9) translateY(50px);
            animation: fadeInUp 1s ease-in-out forwards;
        }

        @keyframes fadeInUp {
            from {
                transform: scale(0.9) translateY(50px);
                opacity: 0;
            }
            to {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        h2 {
            margin-bottom: 1.5rem;
            color: #2C3E50;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        input {
            width: 100%;
            padding: 1rem;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            border-color: #6A1B9A; /* Purple focus color */
            outline: none;
            box-shadow: 0 0 8px rgba(106, 27, 154, 0.4);
        }

        .btn {
            width: 100%;
            padding: 1rem;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            background: #6A1B9A; /* Matching the focus color */
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .btn:hover {
            background: #4A148C; /* Slightly darker purple for hover effect */
            transform: translateY(-3px);
        }

        .login-link {
            margin-top: 1.2rem;
            display: block;
            font-size: 1rem;
            color: #7F8C8D;
            text-decoration: none;
            transition: color 0.3s;
        }

        .login-link:hover {
            color: #6A1B9A;
        }

        .social-icons {
            margin-top: 2.5rem;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            opacity: 0;
            animation: fadeIn 1s ease-in-out 0.5s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .social-icons a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: white;
            font-size: 1.6rem;
            background: #34495E;
            transition: transform 0.3s, background 0.3s;
        }

        .social-icons a:hover {
            background: #2C3E50;
            transform: scale(1.1);
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.8rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            input, .btn {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form>
            <div class="form-group">
                <input type="text" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn">Register</button>
            <a href="#" class="login-link">Already have an account? Login</a>
        </form>

        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Registration Successful!');
        });
    </script>
</body>
</html>
