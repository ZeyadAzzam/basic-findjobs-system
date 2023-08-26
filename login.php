<!DOCTYPE html>
<html>
<head>
    <title>Login - Find Jobs</title>
    <style>
        /* Navbar */
        .navbar {
        overflow: hidden;
        background-color: darkcyan;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .navbar .sitename {
        color: white;
        text-align: center;
        padding: 14px 16px;
        font-size: 17px;
        font-weight: bold;
        text-decoration: none;
        margin-right: auto;
    }

    .navbar .nav-link {
        color: white;
        padding: 14px 16px;
        font-size: 14px;
        text-decoration: none;
        margin-right: 10px;
        font-weight: bold;
    }

    .navbar .nav-link:hover {
        background-color: #008080;
        border-radius: 5px;
    }

        /* Footer */
        .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: darkcyan;
        color: white;
        padding: 5px;
        text-align: center;
        font-size: 14px;
    }

        .footer .social-links {
            margin-top: 10px;
        }

        .footer .social-links a {
            color: white;
            margin: 5px;
            text-decoration: none;
            font-size: 20px;
        }


        /* Rest of the styles */
        body {
            background-color: darkcyan;
            margin: 0;
            padding: 0;
            background-image: url("https://cdn.wallpapersafari.com/57/90/BkLTEQ.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            display: flex;
            justify-content:center;
            align-items: center;
            min-height: auto;
        }

        .form {
            display: block;
            padding: 1rem;
            max-width: 350px;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 black;
            backdrop-filter: blur(20px);

        }

        .form-title {
            font-size: 20px;
            line-height: 1.75rem;
            font-weight: 600;
            text-align: center;
            color: #000;
        }

        .input-container {
            position: relative;
        }

        .input-container input,
        .form button {
            outline: none;
            border: 1px solid #e5e7eb;
            margin: 7px 0;
        }

        .input-container input {
            background-color: #fff;
            padding: 1rem;
            padding-right: 3rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            width: 300px;
            box-shadow: 0 1px 2px 0 black;
        }

        .submit {
            display: block;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            background-color: darkcyan;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            width: 100%;
            text-transform: uppercase;
        }

        .signup-link {
            color: black;
            font-size: 0.875rem;
            line-height: 1.25rem;
            text-align: center;
        }

        .signup-link a {
            text-decoration: underline;
            color: blue;
        }
      
    </style>
</head>
<body>
<div class="navbar">
    <a href="#" class="sitename">Find Jobs</a>
    <div class="nav-links">
        <a href="#" class="nav-link">Home</a>
        <a href="#" class="nav-link">About Us</a>
        <a href="https://www.ltuc.com/" target="_blank" class="nav-link">Contact</a>
    </div>
</div>

    <!-- form -->
    <div class="container">
   
        <form class="form" action="process/account.php" method="post" required>
            <p class="form-title">Sign in to your account</p>

            <div class="input-container">
                <input type="email" name="email" placeholder="Enter email" id="email">
                <span></span>
            </div>
            <div class="input-container">
                <input type="password" name="pass" placeholder="Enter password" id="pass">
            </div>

            <button type="submit" class="submit">Sign in</button>

            <p class="signup-link">No account?<a href="pages/register.php">Sign up</a></p>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 Find Jobs. All rights reserved.</p>

        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Include Font Awesome library for social icons -->
    <script src="https://kit.fontawesome.com/1e4272720a.js" crossorigin="anonymous"></script>
    
</body>
</html>
