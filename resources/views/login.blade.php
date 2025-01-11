<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(45deg, #1D4350, #A43931);
            overflow: hidden;
        }

        .container {
            background: white;
            width: 100%;
            max-width: 400px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            padding: 2.5rem;
            text-align: center;
            transform: scale(0.8) translateY(50px);
            animation: slideUpZoom 0.8s forwards;
        }

        @keyframes slideUpZoom {
            from {
                transform: scale(0.8) translateY(50px);
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
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        input {
            width: 100%;
            padding: 0.9rem;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: all 0.3s;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            border-color: #A43931;
            outline: none;
            box-shadow: 0 0 8px rgba(164, 57, 49, 0.5);
        }

        .btn {
            width: 100%;
            padding: 0.9rem;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(to right, #1D4350, #A43931);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .btn:hover {
            background: linear-gradient(to left, #1D4350, #A43931);
            transform: translateY(-3px);
        }

        .forgot-password {
            margin-top: 1rem;
            display: block;
            font-size: 0.9rem;
            color: #7F8C8D;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #A43931;
        }

        .social-icons {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            animation: fadeIn 1s ease-in-out 0.5s forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
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
            font-size: 1.4rem;
            background: linear-gradient(to right, #1D4350, #A43931);
            transition: transform 0.3s, background 0.3s;
        }

        .social-icons a:hover {
            background: linear-gradient(to left, #1D4350, #A43931);
            transform: scale(1.1);
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
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
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <a href="#" class="forgot-password">Forgot Password?</a>
        </form>
        <div class="social-icons">
            <a href="#" title="Login with Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Login with Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="Login with Google"><i class="fab fa-google"></i></a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Login Successful!');
        });
    </script>
</body>
</html>
