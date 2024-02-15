<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="{{ asset('src/css/styles.css') }}">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="" class="login-form">
            @csrf
            <!-- Add your login form fields here -->
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
