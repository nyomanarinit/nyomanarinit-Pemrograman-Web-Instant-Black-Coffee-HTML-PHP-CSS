<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="loginstyles.css">
</head>

<body>
<header>
        <img src="logo.png" alt="Shop Logo" class="logo">
    </header>
    <div class="container" id="authBox">
        <div id="loginForm">
            <p class="title">LOGIN<br>Hai, Sahabat Kopi! </p>
            <p class="promo">Nikmati promo spesial! Diskon 50% untuk pembelian pertama </p>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username">
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>
            <button class="btn">Login</button>
            <p class="toggle-link" onclick="toggleForm()">Belum punya akun? Daftar</p>
        </div>
        
        <div id="registerForm" style="display: none;">
            <p class="title">Sign Up</p>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name">
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="E-mail">
            </div>
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="tel" placeholder="Phone Number">
            </div>
            <div class="input-group">
                <i class="fas fa-venus-mars"></i>
                <select>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>
            <button class="btn">Create Account</button>
            <p class="toggle-link" onclick="toggleForm()">Sudah punya akun? Login</p>
        </div>
    </div>
    
    <script>
        function toggleForm() {
            document.getElementById('loginForm').style.display = 
                document.getElementById('loginForm').style.display === 'none' ? 'block' : 'none';
            document.getElementById('registerForm').style.display = 
                document.getElementById('registerForm').style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
