<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h1>

    Directorios principales
</h1>
<h4>App/Http/Controllers</h4>
<p>Establecer los metodos o programa la lógica de negocio</p>
<h4>App/Models</h4>
<p>Mapear las tablas de la base de datos y establecer relaciones hasOne hasMany belongsToMany</p>
<h4>Database/Migraciones</h4>
<p>crear las tablas y establecer relaciones entre llave primaria y secundaria</p>
<h4>Database/Seeders</h4>
<p>Crear Registros</p>
<h4>Public</h4>
<p>Guardar archivos adjuntos, archivos CCS, archiso JS</p>
<h4>Resources/Views</h4>
<p>vista o pantallas para el usuario y el uso de páginas maestras @extends @yield </p>
<h4>Routes</h4>
<p>rutas para acceder a un metodos del controlador, vistas </p>

ESTABLECER RESTRICCIONES DE RUTAS POR CADA ROL




<table border="1">
    <thead>
        <th>Id</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Nombres</th>
        <th>Email</th>
        <th>Roles</th>

    </thead>

        @foreach($user as $users)
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->firstname }}</td>
            <td>{{ $users->lastname }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
            @foreach ($users->roles as $item)
                {{$item->name}}
            @endforeach

                </td>
            </tr>
        @endforeach

</table>


Mostrar un usuario

<h1>COMANDO PARA ELIMINAR TODAS LA TABLAS</h1>
<p>php artisan db:wipe</p>
<h1>Ejecutar los seeders</h1>
<p>php artisan db:seed</p>

insert into model_has_roles values(1,App\Models\User,1)
</body>
</html>
