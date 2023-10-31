<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>

<body class="antialiased">
    <div class="card" style="margin: 30px;">
        <div class="card-header">
            <div class="card-title">LOGIN FORM</div>
        </div>
        <div class="card-body">
            <form action="">
                @csrf
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">

                <button class="submit">Login</button>
            </form>
            <a href="{{ route('guest') }}">Daftar Buku Tamu</a>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</html>
