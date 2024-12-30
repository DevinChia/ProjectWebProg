<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/image/justLogo.png">
    <style>
        body {
            background-color: #113826;
            color: white;
        }
        .form-container {
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-green {
            background-color: #113826;
            color: white;
            border: none;
        }
        .btn-green:hover {
            background-color: #EB8E27;
        }
        .btn-outline-green {
            border: 2px solid #113826;
            color: #113826;
            background-color: white;
        }
        .btn-outline-green:hover {
            background-color: #EB8E27;
            border-color: #EB8E27;
            color: white;
        }
    </style>
    <script>
        function showForm(option) {
            document.getElementById('user-login-form').style.display = option === 'user' ? 'block' : 'none';
            document.getElementById('admin-login-form').style.display = option === 'admin' ? 'block' : 'none';
        }

        function handleLogin(event, role) {
            event.preventDefault();
            if (role === 'user') {
                alert('User login successful!');
                window.location.href = "{{ route('home') }}";
            }
        }
    </script>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="form-container" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <div class="text-center mb-4">
                <button class="btn btn-green w-100 mb-2" onclick="showForm('user')">User</button>
                <button class="btn btn-green w-100" onclick="showForm('admin')">Admin</button>
            </div>
            
            <form id="user-login-form" style="display: none;" onsubmit="handleLogin(event, 'user')">
                <h4 class="text-center mb-3">User Login</h4>
                <div class="mb-3">
                    <label for="user-email" class="form-label">Email</label>
                    <input type="email" id="user-email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="user-password" class="form-label">Password</label>
                    <input type="password" id="user-password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-green w-100">Login</button>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register here</a></p>
                </div>
            </form>

            <form id="admin-login-form" style="display: none;" onsubmit="handleLogin(event, 'admin')">
                <h4 class="text-center mb-3">Admin Login</h4>
                <div class="mb-3">
                    <label for="admin-email" class="form-label">Email</label>
                    <input type="email" id="admin-email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="admin-password" class="form-label">Password</label>
                    <input type="password" id="admin-password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-green w-100">Login</button>
            </form>

            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="btn btn-outline-green w-100">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>