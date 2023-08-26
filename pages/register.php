<!DOCTYPE html>
<html>

<head>
  <title>Register - Find Jobs</title>

  <Style>
    body {
      background-color: darkcyan;
      margin: 0;
      padding: 0;
      background-image: url("https://cdn.wallpapersafari.com/57/90/BkLTEQ.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;


    }

    /* Navbar */
    .navbar {
      overflow: hidden;
      background-color: darkcyan;
      left: 0;
      bottom: 0;
      width: 100%;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      padding: 10px;
      position: static;


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

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: auto;
      margin-bottom: 80px;
    }

    .form {

      backdrop-filter: blur(20px);
      padding: 1.5rem;
      width: 400px;
      max-width: 100%;
      margin: 0 auto;
      border-radius: 0.5rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

    }

    .form-title {
      font-size: 1.25rem;
      font-weight: 600;
      text-align: center;
      color: #000;
      margin-bottom: 1.5rem;
    }

    .input-container {
      margin-bottom: 1.25rem;
    }

    .input-container label {
      display: block;
      font-size: 0.875rem;
      font-weight: 500;
      color: #333;
      margin-bottom: 0.5rem;
    }

    .input-container input,
    .input-container textarea,
    .input-container select {
      outline: none;
      border: 1px solid #e5e7eb;
      padding: 0.5rem;
      font-size: 0.875rem;
      line-height: 1.25;
      width: 100%;
      border-radius: 0.25rem;
    }

    textarea {
      resize: vertical;
    }

    .submit {
      display: block;
      padding: 0.75rem 1.25rem;
      background-color: darkcyan;
      color: #ffffff;
      font-size: 0.875rem;
      font-weight: 500;
      width: 100%;
      border: none;
      border-radius: 0.25rem;
      text-transform: uppercase;
      cursor: pointer;
    }

    .signup-link {
      font-size: 0.875rem;
      line-height: 1.25rem;
      text-align: center;
    }

    .signup-link a {
      text-decoration: underline;
      color: blue;
    }

    /* Footer */
    .footer {
      position: static;
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
  </Style>
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

  </div>

  <div class="container">
    <form class="form" action="../process/newAccount.php" method="post">
      <h2 class="form-title">sign up</h2>

      <div class="input-container">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" required>
      </div>

      <div class="input-container">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="input-container">
        <label for="pass">Password</label>
        <input type="password" id="password" name="pass" required>
      </div>

      <div class="input-container">
        <label for="mobileNumber">Mobile Number</label>
        <input type="tel" id="mobileNumber" name="mobileNumber" required>
      </div>

      <div class="input-container">
        <label for="experience">Experience</label><br>
        <select id="experience" name="experience">
          <option value="" disabled selected>Select experience level</option>
          <option value="None">None</option>
          <option value="Junior (0-2 years)">Junior (0-2 years)</option>
          <option value="Middle (3-5 years)">Middle (3-5 years)</option>
          <option value="Senior (6+ years)">Senior (6+ years)</option>
        </select>
      </div>

      <div class="input-container">
        <label for="language">Language</label><br>
        <select id="language" name="language">
          <option value="" disabled selected>Select language</option>
          <option value="English">English</option>
          <option value="Arabic">Arabic</option>
          <option value="Spanish">Spanish</option>
          <option value="French">French</option>
          <option value="German">German</option>
          <option value="other">Other</option>

        </select>
      </div>

      <div class="input-container">
        <label for="bio">Brief Bio</label>
        <textarea id="bio" name="bio"></textarea>
      </div>

      <div class="input-container">
        <label for="fieldOfStudy">Field of Study</label><br>
        <select id="fieldOfStudy" name="fieldOfStudy" required>
          <option value="" disabled selected>Choose Field of Study</option>
          <option value="SW">Software Engineering</option>
          <option value="AI">Artificial Intelligence</option>
          <option value="cyber">Cybersecurity</option>
          <option value="cloud">Cloud Computing</option>
        </select>
      </div>

      <input type="submit" class="submit" value="Register">

      <p class="signup-link">Already have account?<a href="../login.php">Login</a></p>
    </form>
  </div>

</body>

<!-- Footer -->
<footer class="footer">
  <p>&copy; 2023 Find Jobs. All rights reserved.</p>

  <div class="social-links">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
  </div>
</footer>
<!-- Include Font Awesome library for social icons -->
<script src="https://kit.fontawesome.com/1e4272720a.js" crossorigin="anonymous"></script>


</html>