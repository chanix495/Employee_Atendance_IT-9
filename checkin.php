<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In System</title>
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
        }

        .checkin-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 2rem;
        }

        .checkin-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 20px;
            background: #2C2C2C;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .checkin-btn:hover {
            transform: translateY(-2px);
        }

        .manual-form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        input[type="email"] {
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .submit-btn {
            padding: 16px 24px;
            background: #2C2C2C;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: opacity 0.3s ease;
        }

        .submit-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkin-grid">
            <button class="checkin-btn">
                <span class="icon"></span>
                Biometric
            </button>
            <button class="checkin-btn">
                <span class="icon"></span>
                RFID
            </button>
            <button class="checkin-btn">
                <span class="icon"></span>
                QR Code
            </button>
            <button class="checkin-btn">
                <span class="icon"></span>
                Manual
            </button>
        </div>
        
        <div class="manual-form">
            <input type="email" placeholder="Enter employee email" required>
            <button class="submit-btn">Submit Attendance</button>
        </div>
    </div>
</body>
</html>