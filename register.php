<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Inherit base styles from login */
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

        .logo-container {
    text-align: center;
    margin-bottom: 2rem;
    opacity: 0;
    animation: fadeIn 1s ease-in-out forwards;
}

.company-logo {
    max-width: 160px;
    max-height: 110px;
    display: block;
    margin: 0 auto;
    transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
}

/* Logo Hover Effect */
.company-logo:hover {
    transform: scale(1.1);
    filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
}

/* Fade-in Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

        /* Registration Form Styles */
        .register-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 2rem;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2C2C2C;
            font-weight: 500;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        input:focus, textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .submit-btn {
            background: #2C2C2C;
            color: #F5F5F5;
            width: 100%;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .login-link a {
            color: #2C2C2C;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #1A1A1A;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="../Image/etool_1742137063705.png" alt="Company Logo" class="company-logo">
    </div>

    <div class="register-box">
        <form action="register_process.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" placeholder="Enter your surname" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-user-plus"></i> Register
            </button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="login_handler.php">Login here</a></p>
        </div>
    </div>
</body>
</html>