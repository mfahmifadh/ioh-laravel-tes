<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="card" style="margin: 30px;">
        <div class="card-header">
            <h6>BUKU TAMU</h6>
        </div>
        <form action="{{ route('guest.post') }}" method="POST">
            @csrf
            <div class="card-body">
                <label class="mb-2">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
                <label class="mb-2 mt-2">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <label class="mb-2 mt-2">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                <label class="mb-2 mt-2">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="card-footer">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</html>
