<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listo de Usuarios</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <hr>

    <ul>
        <h2>{{ $nom }}</h2>
        @forelse ($users as $user)
            <li>{{ $user }}</li>
          @empty
                <li>No hay usuarios registrado.</li>
        @endforelse

   

    </ul>

    @foreach ($color as $colo)
        <p>{{ $colo }}</p>
    @endforeach
    
</body>
</html>