<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    @include('partial.nav')
    <pre>{{ Auth::user() }}</pre>
    <br>
    <a href="{{ route('usuario.index') }}" class="btn btn-success">Listar ususarios</a>

    <h1>DASHBOARD</h1>
</body>
</html>