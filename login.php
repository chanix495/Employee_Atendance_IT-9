<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Employee Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #8CADFF, #E5A2FF);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Logo Styling */
        .logo-container {
            text-align: center;
            margin-bottom: 2rem; /* Increased spacing */
        }

        .company-logo {
            max-width: 160px;
            max-height: 110px;
            display: block;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }

        .company-logo:hover {
            transform: scale(1.05); /* Slight zoom effect */
        }

        /* Glassmorphism Effect */
        .login-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 2rem;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .login-btn, .signup-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px 24px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.3s ease;
            width: 100%;
            text-decoration: none; /* Ensures link style is consistent */
        }

        .login-btn {
            background: #2C2C2C;
            color: #F5F5F5;
            border: none;
        }

        .login-btn:hover {
            transform: translateY(-2px);
        }

        .signup-btn {
            background: #FFFFFF;
            color: #000000;
            border: 1px solid #ccc;
        }

        .signup-btn:hover {
            background: #f0f0f0;
        }

        .icon {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <!-- Logo at the Top -->
    <div class="logo-container">
        <img src="../Image/etool_1742137063705.png" alt="Company Logo" class="company-logo">
    </div>

    <!-- Login Box -->
    <div class="login-box">
        <div class="button-group">
            <button class="login-btn">
                <i class="fas fa-user icon"></i> Employee Login
            </button>
            <button class="login-btn">
                <i class="fas fa-user-shield icon"></i> Admin Login
            </button>
        </div>
        
        <a href="register.php" class="signup-btn">
            <i class="fas fa-user-plus icon"></i> Sign Up
        </a>
    </div>  

</body>
</html>
