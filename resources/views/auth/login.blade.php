<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
    <div class="login-page">
        <div class="login-box">
            <h5>Hi, Admin</h5>
            <form method="POST" action="{{route('login.post')}}">
                @csrf
                <div class="input-row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="username" required>
                </div>
                <div class="input-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
