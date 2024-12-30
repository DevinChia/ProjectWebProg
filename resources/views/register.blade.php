<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    </style>
    <script>
        function handleRegister(event) {
            event.preventDefault();
            alert("Register Successful!");
            window.location.href = "{{ route('login') }}";
        }
    </script>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="form-container" style="width: 100%; max-width: 400px;">
            <form onsubmit="handleRegister(event)">
                <h3 class="text-center mb-4">Register</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-green w-100">Register</button>
                <div class="text-center mt-3">
                    <p>Already have an account? 
                        <a href="{{ route('login') }}" class="text-primary">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



