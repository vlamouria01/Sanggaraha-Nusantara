<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email | Sanggraha NUSANTARA</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .input-container {
            position: relative;
            margin-bottom: 15px;
        }

        .input-container input {
            width: calc(100% - 50px);
            padding: 10px 10px 10px 40px;
            font-size: 14px;
            border: none;
            border-bottom: 2px solid #d49a56;
            outline: none;
            background: transparent;
            color: #ffffff;
            transition: border-color 0.3s ease;
        }

        .input-container input:focus {
            border-bottom: 2px solid #f7dabb;
        }

        .input-container .input-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            opacity: 0.7;
        }

        .input-container .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            cursor: pointer;
            opacity: 0.7;
        }
    </style>
</head>
<body class="body-login">
    <div class="header-fpw">
        <h3>Enter Your New Password</h3>
        <h1>SANGGRAHA NUSANTARA</h1>
    </div>
    <div class="login-container">   
        <form class="login-form">
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/lock.png" alt="Password Icon" class="input-icon">
                <input id="password" type="password" placeholder="New Password" required>
                <img src="https://img.icons8.com/ios-filled/20/FFFFFF/invisible.png" alt="Toggle Password" class="toggle-password" onclick="togglePasswordVisibility(event)">
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>

    <script>
        function togglePasswordVisibility(event) {
            const toggleIcon = event.target;
            const passwordInput = toggleIcon.previousElementSibling;

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.src = 'https://img.icons8.com/ios-filled/20/FFFFFF/visible.png';
            } else {
                passwordInput.type = 'password';
                toggleIcon.src = 'https://img.icons8.com/ios-filled/20/FFFFFF/invisible.png';
            }
        }
    </script>
</body>
</html>