<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Page</title>
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

        .login-container {
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 350px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 70px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            animation: slideIn 0.5s forwards;
        }

        .header-login, .header-signup {
            position: absolute;
            z-index: 1;
            background: linear-gradient(270deg, #E19A45 0%, #D07D1A 100%);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .header-login {
            margin-bottom: 350px;
        }

        .header-signup {
            margin-bottom: 530px;
        }

        .header-login h3, .header-signup h3 {
            margin: 0;
            font-size: 16px;
            color: white;
            font-weight: 300;
        }

        .header-login h1, .header-signup h1 {
            margin: 5px 0 0;
            font-size: 20px;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
        }

        .login-button {
            background-color: #d49a56;
            color: white;
            font-size: 14px;
            padding: 10px 0;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .login-button:hover {
            background-color: #b57f45;
        }

        .google-login-button {
            background-color: white;
            color: #333;
            font-size: 14px;
            padding: 10px 0;
            border: 1px solid #d49a56;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .google-login-button:hover {
            background-color: #f7f7f7;
        }

        ::placeholder {
            color: #cac3c3;
        }

        /* Animations */
        @keyframes slideIn {
            0% {
                transform: translate(-50%, -60%);
                opacity: 0;
            }
            100% {
                transform: translate(-50%, -50%);
                opacity: 1;
            }
        }

        @keyframes slideOut {
            0% {
                transform: translate(-50%, -50%);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -60%);
                opacity: 0;
            }
        }

    </style>
</head>
<body class="body-login">
    <!-- Header -->
    <div class="header-login" id="header-login">
        <h3>Sugeng Rawuh</h3>
        <h1>SANGGRAHA NUSANTARA</h1>
    </div>

    <div class="header-signup" id="header-signup" style="display: none;">
        <h3>Sugeng Rawuh</h3>
        <h1>SANGGRAHA NUSANTARA</h1>
    </div>

    <!-- Main Body -->
    <div id="login-container" class="login-container">
        <form class="login-form">
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/user.png" alt="User Icon" class="input-icon">
                <input id="username" type="text" placeholder="Username" required>
            </div>
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/lock.png" alt="Password Icon" class="input-icon">
                <input id="password" type="password" placeholder="Password" required>
                <img src="https://img.icons8.com/ios-filled/20/FFFFFF/invisible.png" alt="Toggle Password" class="toggle-password" onclick="togglePasswordVisibility(event)">
            </div>
            <button type="submit" class="login-button">Login</button>
            <button type="button" class="google-login-button"><img style="height: 10px; margin-right: 10px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/800px-Google_%22G%22_logo.svg.png" alt="Google Icon" class="input-icon">Login with Google</button>

            <p style="color: aliceblue;">Don't have an account?</p>
            <a style="color: rgb(216, 214, 214);" href="#" onclick="togglePage('signup')">Create One!</a>
        </form>
    </div>

    <div id="signup-container" class="login-container" style="display: none;">
        <form class="login-form">
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/user.png" alt="User Icon" class="input-icon">
                <input id="name" type="text" placeholder="Name" required>
            </div>
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/menu.png" alt="Dropdown Icon" class="input-icon">
                <select id="role" required style="width: calc(100% - 0px); padding: 10px 10px 10px 40px; font-size: 14px; border: none; border-bottom: 2px solid #d49a56; outline: none; background: transparent; color: #ffffff; appearance: none; cursor: pointer;">
                    <option value="" disabled selected>Select Role</option>
                    <option value="Seller" style="background-color: #333; color: #fff;">Seller</option>
                    <option value="User" style="background-color: #333; color: #fff;">User</option>
                </select>
            </div>
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/email-sign.png" alt="Username Icon" class="input-icon">
                <input id="username" type="text" placeholder="Input Username" required>
            </div>
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/message-squared.png" alt="Email Icon" class="input-icon">
                <input id="email" type="email" placeholder="Email" required>
            </div>
            <div class="input-container">
                <img src="https://img.icons8.com/ios-filled/50/FFFFFF/lock.png" alt="Password Icon" class="input-icon">
                <input id="password" id="signup-password" type="password" placeholder="Password" required>
                <img src="https://img.icons8.com/ios-filled/20/FFFFFF/invisible.png" alt="Toggle Password" class="toggle-password" onclick="togglePasswordVisibility(event)">
            </div>
            <button type="submit" class="login-button">Sign Up</button>
            <button type="button" class="google-login-button"><img style="height: 10px; margin-right: 10px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/800px-Google_%22G%22_logo.svg.png" alt="Google Icon" class="input-icon">Sign Up with Google</button>
    
            <p style="color: aliceblue;">Already have an account?</p>
            <a style="color: rgb(216, 214, 214);" href="#" onclick="togglePage('login')">Sign in!</a>
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


        function togglePage(page) {
            const loginContainer = document.getElementById('login-container');
            const signupContainer = document.getElementById('signup-container');
            const headerLogin = document.getElementById('header-login');
            const headerSignup = document.getElementById('header-signup');

            if (page === 'signup') {
                loginContainer.style.animation = 'slideOut 0.5s forwards';
                setTimeout(function () {
                    loginContainer.style.display = 'none';
                    signupContainer.style.display = 'block';
                    signupContainer.style.animation = 'slideIn 0.5s forwards';
                }, 500);
                
                headerLogin.style.display = 'none';
                headerSignup.style.display = 'block';
            } else {
                signupContainer.style.animation = 'slideOut 0.5s forwards';
                setTimeout(function () {
                    signupContainer.style.display = 'none';
                    loginContainer.style.display = 'block';
                    loginContainer.style.animation = 'slideIn 0.5s forwards';
                }, 500);
                
                headerLogin.style.display = 'block';
                headerSignup.style.display = 'none';
            }
        }
    </script>
</body>
</html>
